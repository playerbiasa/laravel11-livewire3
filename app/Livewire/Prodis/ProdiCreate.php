<?php

namespace App\Livewire\Prodis;

use App\Models\Prodi;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProdiCreate extends Component
{
    #[Validate('required|min:3')]
    public $nama = '';

    #[Validate('required|min:1|max:2')]
    public $jenjang = '';

    #[Validate('required|min:3')]
    public $singkatan = '';

    public function render()
    {
        return view('livewire.prodis.prodi-create');
    }
    public function save(){
        $validated = $this->validate();
        Prodi::create($validated);

        return redirect()->route('admin.prodilist');
    }
}
