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
                <a class="nav-link active" href="#home">Beranda</a>
                <a class="nav-link" href="#about">Tentang Kami</a>
                <a class="nav-link" href="#service">Services</a>
                <a class="nav-link" href="#product">Menu</a>
                <a class="nav-link" href="#testi">Testimoni</a>
                <a class="nav-link" href="#artikel">Artikel & News</a>
            </div>
            <a href="{{ route('katalog') }}" class="btn btn-pertama w-100 ms-auto mt-4 d-lg-none">Katalog Produk</a>
        </div>
        <a href="{{ route('katalog') }}" class="btn-pertama ms-auto d-none d-lg-block rounded-pill ">Katalog Produk</a>
    </div>
</nav>
