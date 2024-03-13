<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class PriceFilter extends Component
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
            $filteredProducts = Announcement::where('price', '>=', $min)->where('price', '<=', $max)->get();
        } else {
            $filteredProducts = Announcement::all();
        }
        
        $this->announcements = $filteredProducts;
        
    }


    public function render()
    {
        return view('livewire.price-filter');
    }
}
