<?php

namespace App\Livewire;
use LivewireUI\Modal\ModalComponent;

use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    #[Validate]
    public $title;
    public $description;
    public $price;
    public $category;
    public $category_id;
    public $announcement;




    public function rules()
    {
        return [
            'title' => 'required|min:4',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category_id' =>'required' 
        ];
    }

    protected $messages = [
        'title.required' => 'Il campo Titolo è obbligatorio',
        'title.min' => 'Il campo Titolo deve contenere almeno :min caratteri',
        'description.required' => 'Il campo Descrizione è obbligatorio',
        'description.min' => 'Il campo Descrizione deve contenere almeno :min caratteri',
        'price.required' => 'Il campo Prezzo è obbligatorio',
        'price.numeric' => 'Il campo Prezzo deve essere un numero',
        'category_id.required' => 'La categoria è obbligatoria',
    ];

    public function store()
    {

        $this->validate();
        // $this->announcement->update([
        //      'title' => $this->title,
        //      'description' => $this->description,
        //      'price' => $this->price,
        //      'category_id' =>$this->category_id
        // ]);

        $this->announcement->title = $this->title;
        $this->announcement->description = $this->description;
        $this->announcement->price = $this->price;
        $this->announcement->category_id = $this->category_id;
        $this->announcement->is_accepted = null;
        $this->announcement->save();

        // $this->newAnnouncement();
        session()->flash('success', 'Annuncio modificato correttamente, dovrà essere rivisionato di nuovo.');
        // $this->dispatch('user-ads');
    }

    #[On('announcement-edit')]
    public function edit(Announcement $announcement)
    {
        $this->announcement = $announcement;
        $this->title = $announcement->title;
        $this->description = $announcement->description;
        $this->price = $announcement->price;
        $this->category_id = $announcement->category_id;
        
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    // public function newAnnouncement()
    // {
    //     $this->announcement = $this->announcement;
    //     $this->title = $this->title;
    //     $this->description = $this->description;
    //     $this->price = $this->price;
    //     $this->category = $this->category_id;
    // }

    public function render()
    {
        return view('livewire.form');
    }
}
