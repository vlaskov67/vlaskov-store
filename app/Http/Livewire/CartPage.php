<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartPage extends Component
{
    public $cart = [];

    protected $listeners = ['cartUpdated' => 'refreshCart'];

    public function mount()
    {
        $this->refreshCart();
    }

    public function refreshCart()
    {
        $this->cart = session('cart', []);
    }

    public function updateQuantity($id, $quantity)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, (int)$quantity);
            session(['cart' => $cart]);
            $this->refreshCart();
        }
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
            $this->refreshCart();
        }
    }

    public function clearCart()
    {
        session()->forget('cart');
        $this->refreshCart();
    }

    public function render()
    {
        $total = collect($this->cart)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
        return view('livewire.cart-page', [
            'cart' => $this->cart,
            'total' => $total
        ]);
    }
}
