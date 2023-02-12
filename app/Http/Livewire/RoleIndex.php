<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = ModelsRole::where('name', '!=', 'Super Admin')->get();
        // $roles = ModelsRole::all();
        return view('livewire.role-index', [
            'roles' => $roles
        ]);
    }

    public function roleDelete($id)
    {
        $role = Role::find($id);
        $role->delete();

        flash()->addSuccess('Role Deleted Successfully.');
    }
}
