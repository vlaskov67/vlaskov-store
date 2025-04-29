<div x-data="{ show: @entangle('show') }" x-show="show" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded shadow-lg p-8 w-full max-w-lg relative">
        <button @click="$wire.closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">&times;</button>
        @if($product)
            <h2 class="text-xl font-bold mb-4">{{ $product->name }}</h2>
            <img src="{{ $product->main_image_url }}" class="w-full h-64 object-cover rounded mb-4">
            <div class="mb-2">{{ $product->priceFormatted() }}</div>
            <div class="text-gray-700">{!! nl2br(e($product->description)) !!}</div>
        @endif
    </div>
</div>
