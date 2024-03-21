<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryPriceFilter extends Component
{
    use WithPagination;

    public $prices;
    public $category;

    public function render()
    {
        if ($this->prices) {
            $range = explode('-', $this->prices);
            $min = $range[0];
            $max = $range[1];

            $filteredProducts = Announcement::where('category_id', $this->category->id)->where('price', '>=', $min)->where('price', '<=', $max)->where('is_accepted', true)->paginate(4);
        } else {
            $filteredProducts = Announcement::where('category_id', $this->category->id)->where('is_accepted', true)->paginate(4);
        }
        return view('livewire.category-price-filter', ['announcements' => $filteredProducts]);
    }
}