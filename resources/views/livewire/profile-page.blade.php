<div class="container mx-auto py-8 max-w-lg">
    <h1 class="text-3xl font-bold mb-6">{{ __('Profile') }}</h1>
    @if (session()->has('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif
    <form wire:submit.prevent="updateProfile" class="bg-white p-6 rounded shadow">
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
            <label class="block mb-1">{{ __('Password') }}</label>
            <input type="password" wire:model="password" class="border rounded px-3 py-2 w-full">
            @error('password') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-1">{{ __('Confirm Password') }}</label>
            <input type="password" wire:model="password_confirmation" class="border rounded px-3 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded">{{ __('Update Profile') }}</button>
    </form>
</div>
