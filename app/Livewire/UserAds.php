<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithPagination;
use LivewireUI\Modal\ModalComponent;

class UserAds extends Component
{
    use WithPagination;
    
    public $announcements;

    public function render()
    {
        // $announcements = Announcement::paginate(10);
        // return view('livewire.user-ads', ['announcements' => $announcements]);
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
