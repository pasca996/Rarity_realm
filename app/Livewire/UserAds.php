<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

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
}
