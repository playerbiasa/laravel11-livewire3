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
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="show"><i class="bi bi-folder"></i></button>
                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="edit"><i class="bi bi-check-circle"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="delete"><i class="bi bi-exclamation-octagon"></i></button>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-modal id="prodiModal" title="Tambah Program Studi">
        @livewire('prodis.prodi-create')
    </x-modal>
</div>

@push('scripts')
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endpush
