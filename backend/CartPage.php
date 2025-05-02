<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class CartPage extends Component
{
    public $cart = [];
    public $total = 0;

    protected $listeners = [
        'cartUpdated' => 'updateCart',
    ];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        $this->calculateTotal();
    }

    public function updateCart()
    {
        $this->cart = session()->get('cart', []);
        $this->calculateTotal();
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);
        unset($cart[$productId]);
        session(['cart' => $cart]);
        $this->cart = $cart;
        $this->calculateTotal();
        $this->emit('cartUpdated');
    }

    public function incrementQty($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['qty']++;
            session(['cart' => $cart]);
            $this->cart = $cart;
            $this->calculateTotal();
            $this->emit('cartUpdated');
        }
    }

    public function decrementQty($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId]) && $cart[$productId]['qty'] > 1) {
            $cart[$productId]['qty']--;
            session(['cart' => $cart]);
            $this->cart = $cart;
            $this->calculateTotal();
            $this->emit('cartUpdated');
        }
    }

    public function calculateTotal()
    {
        $this->total = collect($this->cart)->reduce(function ($carry, $item) {
            return $carry + ($item['price'] * $item['qty']);
        }, 0);
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
