<div class="container mx-auto py-8 text-center">
    <h1 class="text-3xl font-bold mb-4">{{ __('Thank you for your order!') }}</h1>
    <div class="mb-2">{{ __('Order #:') }} {{ $order->id }}</div>
    <div class="mb-2">{{ __('Total:') }} ${{ number_format($order->total, 2) }}</div>
    <div class="mb-6">{{ __('A confirmation has been sent to your email.') }}</div>
    <a href="{{ route('home') }}" class="bg-blue-500 text-white px-6 py-3 rounded">{{ __('Back to Home') }}</a>
</div>
