<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StoreUser extends Component
{
    #[Validate]

    public $title;
    public $typeForm;
    public $user;

    public $firstName, $lastName, $email, $password, $phone;
    public $resetPassword = false;

    public function rules()
    {
        return [
            'firstName' => 'required|string|min:3',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:users' . ($this->user ? ',' . $this->user->id : ''),
            'password' => 'nullable|min:6',
            'phone' => 'nullable|min:9'
        ];
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->title = "Edit user";
            $this->typeForm = "edit";
            $this->user = User::where('id', $id)->first();

            $this->firstName = $this->user->first_name;
            $this->lastName = $this->user->last_name;
            $this->email = $this->user->email;
            $this->password = "";
            $this->phone = $this->user->phone;
        } else {
            $this->title = "Create New User";
            $this->typeForm = "create";
        }
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.store-user');
    }

    public function updatedResetPassword()
    {
        if ($this->resetPassword) {
            $this->password = '';
        }
    }

    public function storeUser()
    {
        $this->validate();
        if ($this->typeForm == 'edit') {
            $updateUser = User::where('id', $this->user->id)->first();
            $updateUser->first_name = $this->firstName;
            $updateUser->last_name = $this->lastName;
            $updateUser->email = $this->email;

            if ($this->password != '' && !$this->resetPassword) {
                $updateUser->password = $this->hashingPassword($this->password);
            }

            if ($this->resetPassword) {
                $passReset = $this->generatePassword();
                $updateUser->password = $this->hashingPassword($passReset);
            }

            if ($this->phone) {
                $updateUser->phone = $this->phone;
            }

            $updateUser->save();

            Session::flash('success-message', 'Usuario editado correctamente!');

            return redirect()->route('admin.users.store', $updateUser->id);
        } else {
            $newUser = new User();
            $newUser->first_name = $this->firstName;
            $newUser->last_name = $this->lastName;
            $newUser->email = $this->email;
            $newUser->password = $this->generatePassword();
            $newUser->phone = $this->phone;

            $newUser->save();

            Session::flash('success-message', 'Usuario creado correctamente!');

            return redirect()->route('dashboard');
        }
    }

    private function hashingPassword($pass)
    {
        return Hash::make($pass);
    }

    private function generatePassword()
    {
        $lowerName = strtolower(str_replace(' ', '', $this->firstName));
        return ucfirst($lowerName) . '.2024!';
    }
}
