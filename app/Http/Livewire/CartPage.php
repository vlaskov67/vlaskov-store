<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class CartPage extends Component
{
    public $cart = [];

    protected $listeners = [
        'cartUpdated' => 'refreshCart',
    ];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function add($productId)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $product = Product::findOrFail($productId);
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ];
        }
        session(['cart' => $cart]);
        $this->cart = $cart;
        $this->emit('cartUpdated');
    }

    public function remove($productId)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$productId])) {
            unset($cart[$productId]);
        }
        session(['cart' => $cart]);
        $this->cart = $cart;
        $this->emit('cartUpdated');
    }

    public function updateQuantity($productId, $quantity)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity'] = max(1, (int)$quantity);
        }
        session(['cart' => $cart]);
        $this->cart = $cart;
        $this->emit('cartUpdated');
    }

    public function refreshCart()
    {
        $this->cart = session()->get('cart', []);
    }

    public function getTotalProperty()
    {
        return collect($this->cart)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
