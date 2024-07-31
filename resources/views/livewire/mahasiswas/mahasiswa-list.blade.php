<div>
    <div class="pagetitle">
        <h1>Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('admin.mahasiswacreate') }}" type="button" class="btn btn-primary btn-sm" wire:navigate>
                                        Tambah
                                    </a>
                                    <button type="button" class="btn btn-success btn-sm">
                                        Import
                                    </button>
                                    <button type="button" class="btn btn-info btn-sm">
                                        Export
                                    </button>
                                </div>
                            </div>
                            <form action="">
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control" name="cari" id="cari"
                                        placeholder="Pencarian....">
                                    <select name="prodi" id="prodi" class="form-select">
                                        <option value="" hidden selected>Program Studi</option>
                                        <option value="1">Akuntansi</option>
                                        <option value="2">Ekonomi Islam</option>
                                        <option value="3">Manajemen</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-block"><i
                                            class="ri-user-search-line"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mahasiswas as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->prodi->nama }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success"><i
                                                        class="bi bi-check-circle" wire:navigate></i></button>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-exclamation-octagon"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-bg-danger">
                                                <center>Mahasiswa belum Tersedia.</center>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
