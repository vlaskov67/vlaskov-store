<div class="cart-page-wrapper" x-data>
    <h1 class="cart-title">Корзина</h1>
    <div class="cart-list">
        @forelse($cart as $item)
            <div class="cart-item flex items-center py-4 border-b">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="cart-item-image w-20 h-20 object-cover mr-4">
                <div class="cart-item-info flex-1">
                    <div class="cart-item-name font-semibold">{{ $item['name'] }}</div>
                    <div class="cart-item-price text-gray-500">{{ number_format($item['price'], 2, ',', ' ') }} ₽</div>
                </div>
                <div class="cart-item-qty flex items-center">
                    <button wire:click="updateQuantity({{ $item['id'] }}, {{ $item['quantity'] - 1 }})" class="qty-btn px-2" :disabled="{{ $item['quantity'] <= 1 ? 'true' : 'false' }}">-</button>
                    <input type="number" min="1" class="qty-input w-12 text-center mx-2" wire:model.lazy="cart.{{ $item['id'] }}.quantity" wire:change="updateQuantity({{ $item['id'] }}, $event.target.value)">
                    <button wire:click="updateQuantity({{ $item['id'] }}, {{ $item['quantity'] + 1 }})" class="qty-btn px-2">+</button>
                </div>
                <div class="cart-item-total w-24 text-right font-semibold">
                    {{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} ₽
                </div>
                <button wire:click="remove({{ $item['id'] }})" class="cart-item-remove ml-4 text-red-500 hover:text-red-700">&times;</button>
            </div>
        @empty
            <div class="cart-empty py-10 text-center text-gray-400">Ваша корзина пуста</div>
        @endforelse
    </div>
    <div class="cart-summary flex justify-end items-center mt-8">
        <div class="cart-total-label mr-4 text-lg font-semibold">Итого:</div>
        <div class="cart-total-value text-2xl font-bold">{{ number_format($this->total, 2, ',', ' ') }} ₽</div>
    </div>
    <div class="cart-actions flex justify-end mt-6">
        <a href="{{ route('checkout') }}" class="btn btn-primary px-8 py-3">Оформить заказ</a>
    </div>
</div>
