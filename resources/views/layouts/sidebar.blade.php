<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}" wire:navigate>
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Administrasi</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Surat Menyurat</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.suketaktif') }}" wire:navigate>
                        <i class="bi bi-circle"></i><span>Surat Keterangan Aktif</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Surat Magang/MBKM</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Surat Ijin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Surat Observasi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Surat Penelitian</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Master Data</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
    </ul>

</aside>
