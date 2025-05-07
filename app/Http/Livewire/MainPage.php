<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainPage extends Component
{
    public $products;

    public function mount()
    {
        // For demo, static products. Replace with Product::all() in real app.
        $this->products = [
            [
                'id' => 1,
                'name' => 'Swiss Chocolate',
                'price' => 8.90,
                'image' => '/images/chocolate.jpg',
                'description' => 'Finest Swiss chocolate, 100g.'
            ],
            [
                'id' => 2,
                'name' => 'Alpine Cheese',
                'price' => 12.50,
                'image' => '/images/cheese.jpg',
                'description' => 'Traditional cheese from the Alps, 250g.'
            ],
            [
                'id' => 3,
                'name' => 'Mountain Honey',
                'price' => 15.00,
                'image' => '/images/honey.jpg',
                'description' => 'Organic honey from Swiss mountains, 300g.'
            ]
        ];
    }

    public function addToCart($productId)
    {
        // Add to cart logic (session or database)
        session()->push('cart', $productId);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.main-page');
    }
}
