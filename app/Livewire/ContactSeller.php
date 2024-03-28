<?php

namespace App\Livewire;

use App\Mail\sellerMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ContactSeller extends Component
{
    public $username;
    public $announcement;
    public $price;
    public $description;
    public $argument;
    public $email;

    public function mount($username, $announcement, $price, $email) {
        $this->username = $username;
        $this->announcement = $announcement;
        $this->price = $price;
        $this->email = $email;
    }

    public function sendMail()
    {   
        Mail::to($this->email)->send(new SellerMail($this->description, $this->argument, $this->username));
        Session::flash('message', 'Complimenti, hai inviato il messaggio correttamente.');
    }

    public function render()
    {   

        return view('livewire.contact-seller');
    }
}
