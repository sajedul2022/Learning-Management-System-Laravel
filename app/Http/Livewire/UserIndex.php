<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {

        $users = User::paginate(3);
        return view('livewire.user-index', [
            'users' => $users
        ]);
    }
}
