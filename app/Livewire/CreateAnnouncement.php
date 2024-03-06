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
        'title.required' => 'Il campo Titolo è obbligatorio',
        'title.min' => 'Il campo Titolo deve contenere almeno :min caratteri',
        'description.required' => 'Il campo Descrizione è obbligatorio',
        'description.min' => 'Il campo Descrizione deve contenere almeno :min caratteri',
        'price.required' => 'Il campo Prezzo è obbligatorio',
        'price.numeric' => 'Il campo Prezzo deve essere un numero',
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
