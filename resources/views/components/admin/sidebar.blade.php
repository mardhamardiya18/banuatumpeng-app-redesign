<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard-admin') }}">
            <img src="/images/logo.svg" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Banua Tumpeng</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link icon-move-left active" href="{{ route('dashboard-admin') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('kelola-pesanan') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Pesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('product.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-basket text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('product-gallery.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-album-2 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Gallery Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('category.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-collection text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('banner.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-image text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Banner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('user.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola User</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="/vendor/dashboard/pages/profile.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pengaturan Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('katalog') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-button-power text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-move-left" href="{{ route('katalog') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center ">
                        <i class="ni ni-curved-next text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Go to Catalog</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
