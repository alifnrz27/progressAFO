<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function mount(){

    }

    public function authenticate(){
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.login')->extends('layouts.app');
    }
}
