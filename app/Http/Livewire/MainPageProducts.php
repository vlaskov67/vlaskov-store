<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class MainPageProducts extends Component
{
    public function render()
    {
        $products = Product::where('is_active', true)
            ->orderBy('popularity', 'desc')
            ->take(8)
            ->get();

        return view('livewire.main-page-products', [
            'products' => $products,
        ]);
    }
}
