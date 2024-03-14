<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserAds extends Component
{
    
    public $announcements;


    public function render()
    {
        return view('livewire.user-ads');
    }

    public function delete(Announcement $Announcement)
    {
        $Announcement->delete();
    }

    public function edit(Announcement $announcement)
    {
        $this->dispatch('announcement-edit', announcement: $announcement)->to(Form::class);
    }
}
