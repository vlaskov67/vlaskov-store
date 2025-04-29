<?php
namespace App\Http\Livewire;

use Livewire\Component;

class CatalogFilters extends Component
{
    public $categories;
    public $brands;
    public $selectedCategory;
    public $selectedBrand;

    public function updatedSelectedCategory($value)
    {
        $this->emitUp('filterChanged', ['category' => $value, 'brand' => $this->selectedBrand]);
    }

    public function updatedSelectedBrand($value)
    {
        $this->emitUp('filterChanged', ['category' => $this->selectedCategory, 'brand' => $value]);
    }

    public function render()
    {
        return view('livewire.catalog-filters');
    }
}
