<?php
namespace App\Http\Livewire;

use Livewire\Component;

class ProductModal extends Component
{
    public $product;
    public $show = false;

    protected $listeners = ['product:show' => 'showModal'];

    public function showModal($productId)
    {
        $this->product = \App\Models\Product::find($productId);
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.product-modal');
    }
}
