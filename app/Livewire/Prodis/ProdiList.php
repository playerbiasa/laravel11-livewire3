<?php

namespace App\Livewire\Prodis;

use App\Models\Prodi;
use Livewire\Component;
use Livewire\Attributes\Title;

class ProdiList extends Component
{
    #[Title('e-Administrasi')]
    public function render()
    {
        return view('livewire.prodis.prodi-list',[
            'prodis' => Prodi::all()
        ]);
    }
}
