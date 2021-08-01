<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">

        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item{{ request()->is('visit') ? ' active' : ''}}">
                    <a href="/visit" class='sidebar-link'>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('pembayaran-user') ? ' active' : ''}}">
                    <a href="/pembayaran-user" class='sidebar-link'>
                        <span>Pembayaran</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('akhir-sewa') ? ' active' : ''}}">
                    <a href="/akhir-sewa" class='sidebar-link'>
                        <span>Penyeselesaian Sewa</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('/') ? ' active' : ''}}">
                    <a href="/logout" class='sidebar-link'>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>