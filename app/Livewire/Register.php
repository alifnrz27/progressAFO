<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name, $email, $birth_date, $no_rekam_medis, $password;

    public function register(){
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'birth_date' => ['required'],
            'no_rekam_medis' => ['required', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'birth_date' => $this->birth_date,
            'role' => 'Pasien',
            'no_rekam_medis' => $this->no_rekam_medis,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        $this->email = "";
        $this->name = "";
        $this->birth_date = "";
        $this->no_rekam_medis = "";
        $this->password = "";
    }

    public function render()
    {
        return view('livewire.register')->extends('layouts.app');
    }
}
