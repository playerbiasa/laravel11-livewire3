<?php

namespace App\Livewire\Mahasiswas;

use App\Models\Mahasiswa;
use Livewire\Component;
use Livewire\Attributes\Title;

class MahasiswaList extends Component
{
    #[Title('e-Administrasi')]
    public function render()
    {
        return view('livewire.mahasiswas.mahasiswa-list',[
            'mahasiswas' => Mahasiswa::cursorPaginate('5')
        ]);
    }
}
