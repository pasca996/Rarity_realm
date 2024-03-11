<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;
    public $name;
    public $nameDisabled = true;
    public $ageDisabled = true;
    public $hobbiesDisabled = true;
    public $genderDisabled = true;
    public $jobDisabled = true;
    public $email;
    public $age;
    public $gender;
    public $hobbies;
    public $job;

    public function toggleName()
    { 
        return $this->nameDisabled = !$this->nameDisabled;
    }

    public function toggleAge()
    { 
        return $this->ageDisabled = !$this->ageDisabled;
    }

    public function toggleGender()
    { 
        return $this->genderDisabled = !$this->genderDisabled;
    }

    public function toggleHobbies()
    { 
        return $this->hobbiesDisabled = !$this->hobbiesDisabled;
    }

    public function toggleJob()
    { 
        return $this->jobDisabled = !$this->jobDisabled;
    }

    public function rules()
    {
        return [
            'name' => 'min:3',
            'job' => 'min:3|nullable',
            'age' => 'integer|max:3|',
            'hobbies' => 'min:3|nullable',
            'gender' => 'min:3|nullable'
        ];
    }

    public function store()
    { 
        // $this->validate(); da riattivare appena fatto il mount a tutti i valori
        // User::where('id',$this->id)->update($valid);

        $this->user->update([
            'name' => $this->name,
            'job' => $this->job,
            'age' => $this->age,
            'hobbies' => $this->hobbies,
            'gender' => $this->gender
        ]);

        // $user = User::find($this->user_id)->users()->update([
        //     'name' => $this->name,
        //     'job' => $this->job,
        //     'age' => $this->age,
        //     'hobbies' => $this->hobbies,
        //     'gender' => $this->gender
        // ]);

        session()->flash('status', 'Dati Profilo Salvati');

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->name = $this->user->name;
        $this->job = $this->user->job;
        $this->age = $this->user->age;
        $this->hobbies = $this->user->hobbies;
        $this->gender = $this->user->gender;
    }

    public function render()
    {
        
        return view('livewire.profile');
    }
}
