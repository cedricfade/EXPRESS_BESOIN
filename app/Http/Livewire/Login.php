<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class Login extends Component
{
    public $users;
    public $email;
    public $password;
    protected function rules() {
        return [
            'email' => ['required'],
            'password' => ['required']
        ];
    }

    public function render()
    {
        

      


        $this->users = User::all();


        return view('livewire.login');
    }
}
