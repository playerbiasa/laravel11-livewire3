@push('styles')
@endpush

<div>
    <div class="pagetitle">
        <h1>Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Tambah Mahasiswa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Diri Mahasiswa</h5>
                    <!-- Custom Styled Validation -->
                    <form class="row g-3" autocomplete="off">
                        <div class="col-md-6">
                            <label for="nim" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                            <input type="text" class="form-control" id="nim" name="nim"
                                placeholder="Masukkan NIM" wire:model="nim">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" wire:model="nama">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tempat" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                placeholder="Masukkan Tempat Lahir" wire:model="tempat_lahir">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                wire:model="tanggal_lahir">
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select class="form-select" id=prodi_id" name="prodi_id" wire:model="prodi_id">
                                <option value="" hidden> -- pilih prodi -- </option>
                                @foreach ($prodis as $prodi)
                                    <option value="{{ $prodi->id }}">{{ $prodi->jenjang }} - {{ $prodi->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email" wire:model="email">
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-warning btn-sm" type="button" wire:click="kembali">Kembali</button>
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form><!-- End Custom Styled Validation -->

                </div>
            </div>
        </div>
    </div>
</div>

@push('myscripts')
@endpush
