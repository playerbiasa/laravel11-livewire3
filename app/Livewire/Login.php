<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Mahasiswa;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Layout('layouts.auth')]
#[Title('Login')]
class Login extends Component
{
    public $usertype;
    public $password;
    public $guard;

    protected $rules = [
        'usertype'  => 'required|min:3',
        'password'  => 'required|min:3|max:10',
        'guard'     => 'required|in:user,mahasiswa',
    ];

    protected $messages = [
        'usertype.required' => 'username atau email tidak boleh kosong.',
        'password.required' => 'password tidak boleh kosong.',
        'guard.required'    => 'pilih login sebagai.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $validationAttributes = [
        'usertype' => 'username atau email'
    ];

    public function login()
    {
        $this->validate();
        $isEmail = filter_var($this->usertype, FILTER_VALIDATE_EMAIL);
        $credentials = $isEmail ? ['email' => $this->usertype] : ['username' => $this->usertype];

        $searchField = $isEmail ? 'email' : 'username';
        //pengecekan guard
        if ($this->guard === 'user') {
            $user = User::where($searchField, $this->usertype)->first();
            //pengecekan login sebagai
            if (!$user) {
                session()->flash('error', 'Anda tidak memiliki peran yang sesuai.');
                return;
            }
            //pengecekan status user 1 = aktif atau 0 = tidak aktif
            if ($user->status == 1) {
                //pengecekan username dan password sesuai database
                if (Auth::guard('web')->attempt([$searchField => $this->usertype, 'password' => $this->password])) {
                    // session()->regenerate();
                    return redirect()->route('admin.dashboard');
                }else{
                    session()->flash('error','Email/Username dan Password salah.');
                    return;
                }
            }else{
                session()->flash('error','Akun anda tidak aktif.');
                return;
            }
        }elseif ($this->guard === 'mahasiswa'){
            $mahasiswa = Mahasiswa::where($searchField, $this->usertype)->first();
            //pengecekan login sebagai
            if (!$mahasiswa) {
                session()->flash('error', 'Anda tidak memiliki peran yang sesuai.');
                return;
            }
            //pengecekan status user 1 = aktif atau 0 = tidak aktif
            if ($mahasiswa->status == 1) {
                //pengecekan username dan password sesuai database
                if (Auth::guard('mahasiswa')->attempt([$searchField => $this->usertype, 'password' => $this->password])) {
                    // session()->regenerate();
                    return redirect()->route('admin.dashboard');
                }else{
                    session()->flash('error','Email/Username dan Password salah.');
                    return;
                }
            }else{
                session()->flash('error','Akun anda tidak aktif.');
                return;
            }
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
