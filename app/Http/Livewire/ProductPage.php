<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductPage extends Component
{
    public $product;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->where('is_active', true)->firstOrFail();
    }

    public function addToCart()
    {
        $cart = session()->get('cart', []);
        $id = $this->product->id;
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $this->quantity;
        } else {
            $cart[$id] = [
                'name' => $this->product->name,
                'price' => $this->product->price,
                'quantity' => $this->quantity,
                'image' => $this->product->image,
            ];
        }
        session(['cart' => $cart]);
        $this->emit('cartUpdated');
        session()->flash('success', __('Product added to cart!'));
    }

    public function render()
    {
        return view('livewire.product-page', [
            'product' => $this->product
        ]);
    }
}
