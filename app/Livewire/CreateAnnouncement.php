<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class CreateAnnouncement extends Component
{

    public $title;
    public $description;
    public $price;

    public function rules()
     { 
        return [
        'title' => 'required|min:4',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
    ];
    }
    
    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere un numero'
    ];

    public function store()
    {
        $this->validate();
        Announcement::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm ()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
   
}
