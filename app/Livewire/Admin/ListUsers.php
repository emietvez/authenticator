<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ListUsers extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }
    public function deleteUser(User $user)
    {
        $user->delete();

        Session::flash('success-message', 'Usuario eliminado correctamente!');

        return redirect()->route('admin.users.list');
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.list-users');
    }
}
