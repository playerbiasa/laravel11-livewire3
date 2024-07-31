<?php

namespace App\Livewire\Mahasiswas;

use App\Models\Prodi;
use Livewire\Component;
use Livewire\Attributes\Title;

class MahasiswaCreate extends Component
{
    #[Title('e-Administrasi')]

    public function kembali(){
        return redirect()->route('admin.mahasiswalist');
    }
    public function render()
    {
        return view('livewire.mahasiswas.mahasiswa-create',[
            'prodis' => Prodi::orderBy('jenjang','asc')->get(),
        ]);
    }
}
