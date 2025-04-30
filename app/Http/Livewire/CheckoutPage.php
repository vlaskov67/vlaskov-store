<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use App\Notifications\OrderCreated;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class CheckoutPage extends Component
{
    public $cart = [];
    public $name;
    public $email;
    public $address;
    public $phone;
    public $paymentMethod;
    public $stripeToken;
    public $total = 0;

    public function mount()
    {
        $this->cart = session('cart', []);
        $this->total = collect($this->cart)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
        if(Auth::check()) {
            $this->name = Auth::user()->name;
            $this->email = Auth::user()->email;
        }
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'paymentMethod' => 'required',
        ]);
        if(empty($this->cart)) {
            session()->flash('error', __('Cart is empty.'));
            return;
        }
        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => Auth::id(),
                'name' => $this->name,
                'email' => $this->email,
                'address' => $this->address,
                'phone' => $this->phone,
                'total' => $this->total,
                'status' => 'pending',
            ]);
            foreach($this->cart as $product_id => $item) {
                $order->items()->create([
                    'product_id' => $product_id,
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                ]);
            }
            if($this->paymentMethod === 'stripe') {
                Stripe::setApiKey(config('services.stripe.secret'));
                $intent = PaymentIntent::create([
                    'amount' => (int)($this->total * 100),
                    'currency' => 'usd',
                    'payment_method' => $this->stripeToken,
                    'confirmation_method' => 'manual',
                    'confirm' => true,
                ]);
                if($intent->status !== 'succeeded') {
                    throw new \Exception('Payment failed');
                }
                $order->update(['status' => 'paid']);
            }
            // Send notifications
            $order->notify(new OrderCreated($order));
            session()->forget('cart');
            DB::commit();
            return redirect()->route('order.success', $order->id);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.checkout-page', [
            'cart' => $this->cart,
            'total' => $this->total
        ]);
    }
}
