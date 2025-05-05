<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomePage extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::latest()->take(12)->get();
    }

    public function addToCart($productId)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $product = Product::findOrFail($productId);
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }
        session(['cart' => $cart]);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
