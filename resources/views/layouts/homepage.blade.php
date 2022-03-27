<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/svg" href="images/logo.svg">

    {{-- Style --}}
    @stack('prepend-style')
    @include('components.style')
    @stack('addon-style')

    <title>Banuatumpeng - Solusi Konsumsi Acara Anda</title>
</head>

<body>
    @include('components.navbar-homepage')

    {{-- Header Section Start --}}
    <section class="home">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="label d-flex align-items-center">
                        <img src="/images/ornament-present.svg" alt="banua tumpeng">
                        <div class="ms-2">Presented by Banua Tumpeng</div>
                    </div>
                    <h3 class="heading">Tumpeng and
                        Catering Services</h3>
                    <div class="subheading">Dibuat oleh ahlinya untuk berbagai konsumsi
                        acara spesial pian</div>

                    <div class="buttons text-center text-sm-start">
                        <a href="#" class="btn-pertama d-block d-sm-inline">Telusuri</a>
                        <a href="#" class="btn-kedua d-block d-sm-inline mt-3 mt-sm-0 ms-sm-4">Kontak kami</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="/images/hero-image.webp" class="img-fluid d-block ms-lg-auto mx-auto mx-lg-0 hero-img"
                        alt="banua tumpeng">
                </div>
            </div>
        </div>
    </section>
    {{-- Header Section End --}}

    {{-- About Section Start --}}

    {{-- About Section End --}}



    {{-- Script --}}
    @stack('prepend-script')
    @include('components.script')
    @stack('addon-script')
</body>

</html>
