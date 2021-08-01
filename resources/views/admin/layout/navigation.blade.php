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

                <li class="sidebar-item{{ request()->is('pending') ? ' active' : ''}}">
                    <a href="/pending" class='sidebar-link'>
                        <span>Pending</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('history') ? ' active' : ''}}">
                    <a href="/history" class='sidebar-link'>
                        <span>History</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('pembayaran') ? ' active' : ''}}">
                    <a href="/pembayaran" class='sidebar-link'>
                        <span>Pembayaran</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('visit') ? ' active' : ''}}">
                    <a href="/visitor" class='sidebar-link'>
                        <span>Visit</span>
                    </a>
                </li>

                <li class="sidebar-item{{ request()->is('admin') ? ' active' : ''}}">
                    <a href="/admin" class='sidebar-link'>
                        <span>Admin</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/logout-a" class='sidebar-link'>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>