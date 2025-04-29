<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="relative">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A2 2 0 008.48 19h7.04a2 2 0 001.83-1.3L17 13M7 13V6h10v7"></path></svg>
        @if($cart->count())
            <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full px-1">{{ $cart->count() }}</span>
        @endif
    </button>
    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-80 bg-white border rounded shadow-lg z-20">
        <div class="p-4">
            <h3 class="font-semibold mb-2">@lang('Корзина')</h3>
            @if($cart->count())
                <ul class="divide-y divide-gray-200 mb-4">
                    @foreach($cart->items() as $item)
                        <li class="py-2 flex items-center justify-between">
                            <div>
                                <div class="font-medium">{{ $item->name }}</div>
                                <div class="text-xs text-gray-500">{{ $item->option_name }}</div>
                                <div class="text-gray-700">{{ $item->priceFormatted() }} × {{ $item->qty }}</div>
                            </div>
                            <button wire:click="removeFromCart('{{ $item->rowId }}')" class="text-red-500 hover:underline">&times;</button>
                        </li>
                    @endforeach
                </ul>
                <div class="font-semibold mb-2">@lang('Итого'): {{ $cart->totalFormatted() }}</div>
                <a href="{{ route('cart') }}" class="block bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700">@lang('Оформить заказ')</a>
            @else
                <div class="text-gray-500">@lang('Корзина пуста')</div>
            @endif
        </div>
    </div>
</div>
