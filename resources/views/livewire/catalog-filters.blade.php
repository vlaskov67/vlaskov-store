<div class="bg-white rounded shadow p-4 mb-6">
    <h3 class="font-semibold mb-4">@lang('Фильтры')</h3>
    <div class="mb-4">
        <label class="block mb-1">@lang('Категория')</label>
        <select wire:model="selectedCategory" class="w-full border rounded px-3 py-2">
            <option value="">@lang('Все категории')</option>
            @foreach($categories as $category)
                <option value="{{ $category->slug }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block mb-1">@lang('Бренд')</label>
        <select wire:model="selectedBrand" class="w-full border rounded px-3 py-2">
            <option value="">@lang('Все бренды')</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->slug }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
</div>
