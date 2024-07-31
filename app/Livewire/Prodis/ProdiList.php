<?php

namespace App\Livewire\Prodis;

use App\Models\Prodi;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\WithoutUrlPagination;

class ProdiList extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Title('e-Administrasi')]
    #[Validate('required|min:3')]
    public $nama = '';

    #[Validate('required|min:2')]
    public $jenjang = '';

    #[Validate('required|min:2')]
    public $singkatan = '';
    public $prodiID;

    public function simpanProdi()
    {
        $validated = $this->validate();
        Prodi::create($validated);
        $this->resetFields();
        $this->dispatch('close-modal');

        $this->dispatch('alert',[
            'text'  => "Data berhasil disimpan",
            'icon'  => 'success',
            'title' => 'sukses',
        ]);
    }

    public function editProdi($id){
        $data = Prodi::find($id);

        $this->prodiID = $data->id;
        $this->nama     = $data->nama;
        $this->jenjang  = $data->jenjang;
        $this->singkatan    = $data->singkatan;
    }
    public function updateProdi(){
        $validated = $this->validate();

        Prodi::where('id', $this->prodiID)->update([
            'nama'  => $validated['nama'],
            'jenjang'  => $validated['jenjang'],
            'singkatan'  => $validated['singkatan'],
        ]);

        $this->resetFields();
        $this->dispatch('close-modal');

        $this->dispatch('alert',[
            'text'  => "Data berhasil diubah",
            'icon'  => 'success',
            'title' => 'sukses',
        ]);

    }

    public function closeModal()
    {
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->resetValidation();
        $this->nama = '';
        $this->jenjang = '';
        $this->singkatan = '';
    }

    public function render()
    {
        return view('livewire.prodis.prodi-list',[
            'prodis' => Prodi::cursorPaginate(5)
        ]);
    }
}
