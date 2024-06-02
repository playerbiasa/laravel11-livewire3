<div>
    <div class="pagetitle">
        <h1>Surat Keterangan Aktif Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Surat Menyurat</li>
                <li class="breadcrumb-item active">Surat Keterangan Aktif</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">daftar surat keterangan mahasiswa aktif</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>20240601</td>
                                    <td>John K</td>
                                    <td>S1 Teknik</td>
                                    <td>2016-05-25</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="show"><i class="bi bi-folder"></i></button>
                                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="edit"><i class="bi bi-check-circle"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="delete"><i class="bi bi-exclamation-octagon"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
@endpush
