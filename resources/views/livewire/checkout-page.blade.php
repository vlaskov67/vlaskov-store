<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">{{ __('Checkout') }}</h1>
    @if (session()->has('error'))
        <div class="mb-4 text-red-600">{{ session('error') }}</div>
    @endif
    <form wire:submit.prevent="submit" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <div class="mb-4">
            <label class="block mb-1">{{ __('Name') }}</label>
            <input type="text" wire:model="name" class="border rounded px-3 py-2 w-full">
            @error('name') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1">{{ __('Email') }}</label>
            <input type="email" wire:model="email" class="border rounded px-3 py-2 w-full">
            @error('email') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1">{{ __('Address') }}</label>
            <input type="text" wire:model="address" class="border rounded px-3 py-2 w-full">
            @error('address') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1">{{ __('Phone') }}</label>
            <input type="text" wire:model="phone" class="border rounded px-3 py-2 w-full">
            @error('phone') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1">{{ __('Payment Method') }}</label>
            <select wire:model="paymentMethod" class="border rounded px-3 py-2 w-full">
                <option value="">-- {{ __('Select') }} --</option>
                <option value="stripe">Stripe</option>
            </select>
            @error('paymentMethod') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        @if($paymentMethod === 'stripe')
            <div class="mb-4">
                <label class="block mb-1">{{ __('Stripe Token') }}</label>
                <input type="text" wire:model="stripeToken" class="border rounded px-3 py-2 w-full">
            </div>
        @endif
        <div class="mb-6 text-right text-xl font-bold">
            {{ __('Total:') }} ${{ number_format($total, 2) }}
        </div>
        <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded">{{ __('Place Order') }}</button>
    </form>
</div>
