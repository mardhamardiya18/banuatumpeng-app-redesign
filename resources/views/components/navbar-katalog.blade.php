<nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light fixed-top pt-2 pt-lg-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="/images/logo.ico" class="logo rounded-circle" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarNavAltMarkup">
            <div class="navbar-nav m-lg-auto">
                <a class="nav-link {{ request()->is('katalog') ? 'active' : '' }}"
                    href="{{ route('katalog') }}">Beranda</a>
                <a class="nav-link {{ Request::url() == route('category') ? 'active' : '' }} "
                    href="{{ route('category') }}">Produk Kami</a>
                <a class="nav-link {{ request()->is('reward') ? 'active' : '' }} " href="#">Reward</a>
            </div>
            <div class="nav-auth text-center mt-4 mt-lg-0">
                <a href="https://wa.link/ocl02u" class="btn btn-pertama d-block d-lg-inline mt-4 mt-lg-0">Hubungi
                    kami</a>
            </div>
        </div>
    </div>
</nav>
