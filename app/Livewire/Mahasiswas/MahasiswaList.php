<?php

namespace App\Livewire\Mahasiswas;

use Livewire\Component;
use Livewire\Attributes\Title;

class MahasiswaList extends Component
{
    #[Title('e-Administrasi')]
    public function render()
    {
        return view('livewire.mahasiswas.mahasiswa-list');
    }
}
