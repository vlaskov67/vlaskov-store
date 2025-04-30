<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">{{ __('Cart') }}</h1>
    @if(empty($cart))
        <div class="text-gray-600">{{ __('Your cart is empty.') }}</div>
    @else
        <table class="w-full mb-6">
            <thead>
                <tr>
                    <th class="text-left">{{ __('Product') }}</th>
                    <th>{{ __('Price') }}</th>
                    <th>{{ __('Quantity') }}</th>
                    <th>{{ __('Total') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td class="flex items-center gap-2">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 object-cover rounded">
                            {{ $item['name'] }}
                        </td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>
                            <input type="number" min="1" wire:change="updateQuantity({{ $id }}, $event.target.value)" value="{{ $item['quantity'] }}" class="border rounded px-2 py-1 w-16">
                        </td>
                        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td>
                            <button wire:click="removeItem({{ $id }})" class="text-red-600">&times;</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-between items-center">
            <div>
                <button wire:click="clearCart" class="bg-gray-300 px-4 py-2 rounded">{{ __('Clear Cart') }}</button>
            </div>
            <div class="text-xl font-bold">{{ __('Total:') }} ${{ number_format($total, 2) }}</div>
        </div>
        <div class="mt-6 text-right">
            <a href="{{ route('checkout') }}" class="bg-blue-500 text-white px-6 py-3 rounded">{{ __('Checkout') }}</a>
        </div>
    @endif
</div>
