<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class CartDropdown extends Component
{
    protected $listeners = ['cart:add' => 'addToCart', 'cart:remove' => 'removeFromCart'];

    public function addToCart($productId, $optionId = null)
    {
        Cart::add($productId, $optionId);
        $this->emitSelf('refresh');
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emitSelf('refresh');
    }

    public function render()
    {
        $cart = Cart::current();
        return view('livewire.cart-dropdown', compact('cart'));
    }
}
