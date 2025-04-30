<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomePage extends Component
{
    public function render()
    {
        $products = Product::where('is_active', true)->latest()->paginate(12);
        return view('livewire.home-page', compact('products'));
    }
}
