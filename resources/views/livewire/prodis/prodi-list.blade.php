<div>
    <div class="pagetitle">
        <h1>Program Studi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Program Studi</li>
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
                                    <h5>Daftar Program Studi</h5>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#prodiModal">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mb-2">
                            <table class="table table-hovertable-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenjang</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($prodis as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenjang }}</td>
                                        <td>{{ $item->created_at->isoFormat('D MMMM YYYY') }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info"><i class="bi bi-folder"></i></button>
                                            <button type="button" class="btn btn-sm btn-success"><i class="bi bi-check-circle"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Program Studi belum Tersedia.
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $prodis->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="prodiModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="simpanProdi" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Program Studi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="mb-3">
                                <label for="namaProdi" class="form-label">Nama Program Studi</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" wire:model="nama" placeholder="Enter data">
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenjangProdi" class="form-label">Jenjang</label>
                                <input type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" id="jenjang" wire:model="jenjang" placeholder="Enter data">
                                @error('jenjang')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="singkatanProdi" class="form-label">Singkatan</label>
                                <input type="text" class="form-control @error('singkatan') is-invalid @enderror" name="singkatan" id="singkatan" wire:model="singkatan" placeholder="Enter data">
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
    </div>
</div>

@push('myscripts')
    <script>
        window.addEventListener('dataSaved', event => {
            $('#prodiModal').modal('hide');
        });

        // notifikasi berhasil simpan
        window.addEventListener('alert', (event) => {
            const data = event.detail;
            const text = data[0].text;
            const icon = data[0].icon;
            const title = data[0].title;

            Swal.fire({
                title: title,
                text: text,
                icon: icon
            });
        });
    </script>
@endpush
