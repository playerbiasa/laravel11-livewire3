{{-- Modal Create --}}
<div wire:ignore.self class="modal fade" id="prodiModal" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="simpanProdi" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Program Studi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="namaProdi" class="form-label">Nama Program Studi</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" wire:model="nama" placeholder="Enter data" autofocus>
                        @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenjangProdi" class="form-label">Jenjang</label>
                        <input type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang"
                            id="jenjang" wire:model="jenjang" placeholder="Enter data">
                        @error('jenjang')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="singkatanProdi" class="form-label">Singkatan</label>
                        <input type="text" class="form-control @error('singkatan') is-invalid @enderror"
                            name="singkatan" id="singkatan" wire:model="singkatan" placeholder="Enter data">
                        @error('singkatan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit --}}
<div wire:ignore.self class="modal fade" id="editProdiModal" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="updateProdi">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Program Studi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="namaProdi" class="form-label">Nama Program Studi</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" wire:model="nama" placeholder="Enter data">
                        @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenjangProdi" class="form-label">Jenjang</label>
                        <input type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang"
                            id="jenjang" wire:model="jenjang" placeholder="Enter data">
                        @error('jenjang')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="singkatanProdi" class="form-label">Singkatan</label>
                        <input type="text" class="form-control @error('singkatan') is-invalid @enderror"
                            name="singkatan" id="singkatan" wire:model="singkatan" placeholder="Enter data">
                        @error('singkatan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
