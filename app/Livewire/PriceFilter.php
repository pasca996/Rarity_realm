<?php

namespace App\Livewire;
use Livewire\WithPagination;
use App\Models\Announcement;
use Livewire\Component;

class PriceFilter extends Component
{

    use WithPagination;

    public $prices;
    public $announcements;
    public $category;
    public function updatedPrices()
    {
        $this->resetPage();
        
    }


    public function render()
    {

        if ($this->prices) {
            $range = explode('-', $this->prices);
            $min = $range[0];
            $max = $range[1];
            $filteredProducts = Announcement::where('price', '>=', $min)->where('price', '<=', $max)->where('is_accepted', true)->paginate(12);
        } else {
            $filteredProducts = Announcement::where('is_accepted', true)->paginate(12);
        }
        
       

        
        return view('livewire.price-filter',['annunci' => $filteredProducts]);
    }
}
