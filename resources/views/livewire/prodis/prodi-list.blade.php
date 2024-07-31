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
                                    <button type="button" class="btn btn-primary btn-sm float-end"
                                        data-bs-toggle="modal" data-bs-target="#prodiModal">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mb-2">
                            <table class="table table-hover table-bordered">
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
                                                <button type="button" class="btn btn-sm btn-success"><i
                                                        class="bi bi-check-circle" data-bs-toggle="modal"
                                                        data-bs-target="#editProdiModal"
                                                        wire:click="editProdi({{ $item->id }})"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-exclamation-octagon"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-bg-danger"><center>Program Studi belum Tersedia.</center></td>
                                        </tr>
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

    <!-- Modal Create -->
    @include('components.prodi-modal')
</div>

@push('myscripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#prodiModal').modal('hide');
            $('#showProdiModal').modal('hide');
            $('#editProdiModal').modal('hide');
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
