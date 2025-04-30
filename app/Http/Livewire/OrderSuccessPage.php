<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderSuccessPage extends Component
{
    public $order;

    public function mount($order)
    {
        $this->order = Order::findOrFail($order);
    }

    public function render()
    {
        return view('livewire.order-success-page', [
            'order' => $this->order
        ]);
    }
}
