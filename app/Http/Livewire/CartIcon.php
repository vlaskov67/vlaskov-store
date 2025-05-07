<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIcon extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh', 'addToCart' => 'addToCart'];

    public function addToCart($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]++;
        } else {
            $cart[$productId] = 1;
        }
        session(['cart' => $cart]);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        $cart = session()->get('cart', []);
        $count = array_sum($cart);
        return view('livewire.cart-icon', [
            'count' => $count,
        ]);
    }
}
