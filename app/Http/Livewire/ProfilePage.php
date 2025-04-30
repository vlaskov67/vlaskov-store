<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilePage extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6|confirmed',
        ]);
        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        if($this->password) {
            $user->password = Hash::make($this->password);
        }
        $user->save();
        session()->flash('success', __('Profile updated!'));
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
