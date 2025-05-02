<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddToCartButton extends Component
{
    public function addToCart()
    {
        // Здесь может быть логика добавления товара в корзину
        session()->flash('message', 'Товар добавлен в корзину!');
    }

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}
