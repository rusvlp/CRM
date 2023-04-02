<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $users = User::all();
        return view('admin.livewire.users', ['users' => $users]);
    }
}
