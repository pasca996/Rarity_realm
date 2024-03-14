<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryPriceFilter extends Component
{
    public $prices;
    public $announcements;
    public $category;

    public function updatedPrices()
    {
        if ($this->prices) {
            $range = explode('-', $this->prices);
            $min = $range[0];
            $max = $range[1];
            
            $filteredProducts = $this->category->announcements->where('price', '>=', $min)->where('price', '<=', $max)->where('is_accepted',true);
        } else {
            $filteredProducts = $this->category->announcements->where('is_accepted',true);
        }
        $this->announcements = $filteredProducts;
    }

    public function render()
    {
        return view('livewire.category-price-filter');
    }
}
