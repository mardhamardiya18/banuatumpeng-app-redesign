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
    <section class="about section-margin position-relative">
        <img src="/images/ornabout1.svg" class="ornabout position-absolute top-0 start-0" alt="">
        <img src="/images/ornabout2.svg" class="ornabout position-absolute top-0 end-0" alt="">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="thumbnail-about mx-auto">
                        <img src="/images/about.webp" class=" img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <p class="label-section">tentang kami</p>
                    <h3 class="heading-section">Kenal Lebih Dekat Yuk
                        Dengan <span>Banua Tumpeng</span></h3>

                    <p class="about-content">Berdiri sejak 2019, Kami terus berinovasi dalam menghadirkan
                        solusi terbaik untuk keperluan acara special konsumen kami.</p>
                    <p class="about-content">Sudah <span>300+ Customer</span> dengan <span>15.000+ jumlah nasi kotak,
                            nasi tumpeng, box bento dan lainnya </span> yang tercatat dan selalu
                        mendapatkan tanggapan positif dari customer kami.</p>
                    <p class="about-content">Semua ini berkat juru masak yang berpengalaman puluhan
                        tahun dan tentunya selalu mengutamakan pelayanan terbaik.</p>

                    <div class="btn-about-wrapper">
                        <a href="#" class="btn-pertama text-center d-block d-sm-inline">Kontak Kami</a>
                        <a href="#" class="btn-kedua text-center d-block d-sm-inline mt-3 mt-sm-0 ms-sm-4 ms-0">Kunjungi
                            Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Services Section Start --}}
    <section class="service section-margin">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-10 mx-auto">
                    <p class="label-section">Services</p>
                    <h3 class="heading-section">Apa Yang Akan Anda Dapatkan
                        Jika Order Disini ?</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card rounded-3 bg-transparent p-5">
                        <div class="heading-card d-flex align-items-center justify-content-between">
                            <img src="/images/service1.svg" alt="">
                            <div class="title-card ms-3">Best Services</div>
                        </div>
                        <p class="content-card mt-4">
                            Kami selalu memberikan dengan klien kami pelayanan berkualitas tinggi dengan makanan
                            terbaik
                            dan lezat pastinya.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <div class="card rounded-3 bg-transparent p-5">
                        <div class="heading-card d-flex align-items-center justify-content-between">
                            <img src="/images/service2.svg" alt="">
                            <div class="title-card ms-3">Event
                                Support</div>
                        </div>
                        <p class="content-card mt-4">
                            Kami akan membantu
                            Menyukseskan acara anda
                            melalui support yang
                            kami
                            berikan
                            yaitu kemasan cantik
                            sesuai tema acara yang
                            berlangsung.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <div class="card rounded-3 bg-transparent p-5">
                        <div class="heading-card d-flex align-items-center justify-content-between">
                            <img src="/images/service3.svg" alt="">
                            <div class="title-card ms-3">Delivery
                                Order</div>
                        </div>
                        <p class="content-card mt-4">
                            Kami juga memberikan pelayanan full online (Optional) mulai dari
                            pemesanan hingga produk ditempat sehingga anda tidak perlu lagi untuk keluar rumah.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="card rounded-3 bg-transparent p-5">
                        <div class="heading-card d-flex align-items-center justify-content-between">
                            <img src="/images/service4.svg" alt="">
                            <div class="title-card ms-3">Food
                                Quality</div>
                        </div>
                        <p class="content-card mt-4">
                            Kami Menjamin rasa yang pas dan porsi yang sesuai karena diolah bersama juru masak
                            berpengalaman
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Services Section End --}}

    {{-- Product Section Start --}}
    <section class="product section-margin">
        <div class="container">
            <div class="row row-banner mx-1 justify-content-between align-items-center rounded-3 px-3 py-5">
                <div class="col-lg-4 offset-lg-1">
                    <div class="heading-banner d-flex align-items-center">
                        <h3 class="me-2 me-sm-3">GRATIS ONGKIR!</h3>
                        <img src="/images/delivery-icon.svg" alt="">
                    </div>
                    <p>Untuk wilayah :</p>
                    <p class="mb-4">Banjarmasin-Banjarbaru-Martapura
                        dan Sekitarnya</p>
                    <a href="#">Ketentuan Berlaku</a>
                </div>
                <div class="col-lg-3 offset-md-1 offset-lg-0 mt-5 mt-lg-0">
                    <a href="#" class="btn-pertama">Pesan Sekarang</a>
                </div>
            </div>

            <div class="row row-product text-center">
                <div class="col-lg-12 ">
                    <p class="label-section">Produk Kami</p>
                    <h3 class="heading-section">Paket Menu Yang Kami Tawarkan</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card position-relative mx-auto">
                        <img src="/images/tumpeng-homepage.webp" class=" img-fluid" alt="">
                        <p class="caption-product position-absolute start-0 bottom-0 p-4">Paket <br>
                            Tumpeng Besar</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card position-relative mx-auto mt-3 mt-sm-0">
                        <img src="/images/tumpengmini-homepage.webp" class=" img-fluid" alt="">
                        <p class="caption-product position-absolute start-0 bottom-0 p-4">Paket <br>
                            Tumpeng Mini</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mx-auto">
                    <div class="card position-relative">
                        <img src="/images/naskot-homepage.webp" class=" img-fluid" alt="">
                        <p class="caption-product position-absolute start-0 bottom-0 p-4">Paket <br>
                            Nasi Kotak</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mx-auto">
                    <div class="card position-relative">
                        <img src="/images/bento-homepage.webp" class=" img-fluid" alt="">
                        <p class="caption-product position-absolute start-0 bottom-0 p-4">Paket <br>
                            Box Bento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Product Section End --}}

    {{-- Testimoni Section Start --}}
    <section class="testi section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <p class="label-section">testimoni</p>
                    <h3 class="heading-section">Apa Yang Mereka Katakan ?</h3>
                    <p class="subheading">Semua customer kami merasa puas
                        dengan olahan dan pelayanan yang
                        kami berikan
                    </p>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <!-- Swiper -->
                    <div class="swiper mySwiperTesti pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card px-5 py-4">
                                <i class='bx bxs-quote-left bx-md'></i>
                                <p class="testi-content mt-1">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, provident.
                                </p>
                                <div class="identity d-flex mt-4">
                                    <img src="/images/user.png" class="img-fluid rounded-circle" alt="">
                                    <div class="detail ms-3">
                                        <p class="name m-0">Mardha Mardiya</p>
                                        <p class="address m-0">Banjarbaru</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card px-5 py-4">
                                <i class='bx bxs-quote-left bx-md'></i>
                                <p class="testi-content mt-1">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, provident.
                                </p>
                                <div class="identity d-flex mt-4">
                                    <img src="/images/user.png" class="img-fluid rounded-circle" alt="">
                                    <div class="detail ms-3">
                                        <p class="name m-0">Mardha Mardiya</p>
                                        <p class="address m-0">Banjarbaru</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card px-5 py-4">
                                <i class='bx bxs-quote-left bx-md'></i>
                                <p class="testi-content mt-1">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, provident.
                                </p>
                                <div class="identity d-flex mt-4">
                                    <img src="/images/user.png" class="img-fluid rounded-circle" alt="">
                                    <div class="detail ms-3">
                                        <p class="name m-0">Mardha Mardiya</p>
                                        <p class="address m-0">Banjarbaru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Testimoni Section End --}}

    {{-- Blog Section Start --}}
    <section class="blog section-margin">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="label-section">Blog & Tips</p>
                    <h3 class="heading-section">Temukan Informasi Menarik Disini </h3>
                </div>
            </div>
            <div class="row row-blog-card">
                <div class="col-lg-3 col-md-6">
                    <div class="card mx-auto">
                        <div class="img-box position-relative">
                            <img src="/images/blog.png" class="img-fluid" alt="">
                            <p class="category-blog position-absolute">Masakan</p>
                        </div>
                        <div class="card-body">
                            <small class="text-muted date-publish">10 April 2022</small>
                            <p class="title-blog">Rahasia Olahan Dapur
                                Disukai Keluarga Ibu-Ibu
                                Wajib Tau</p>
                            <a href="#">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-sm-0">
                    <div class="card mx-auto">
                        <div class="img-box position-relative">
                            <img src="/images/blog.png" class="img-fluid" alt="">
                            <p class="category-blog position-absolute">Masakan</p>
                        </div>
                        <div class="card-body">
                            <small class="text-muted date-publish">10 April 2022</small>
                            <p class="title-blog">Rahasia Olahan Dapur
                                Disukai Keluarga Ibu-Ibu
                                Wajib Tau</p>
                            <a href="#">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="card mx-auto">
                        <div class="img-box position-relative">
                            <img src="/images/blog.png" class="img-fluid" alt="">
                            <p class="category-blog position-absolute">Masakan</p>
                        </div>
                        <div class="card-body">
                            <small class="text-muted date-publish">10 April 2022</small>
                            <p class="title-blog">Rahasia Olahan Dapur
                                Disukai Keluarga Ibu-Ibu
                                Wajib Tau</p>
                            <a href="#">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="card mx-auto">
                        <div class="img-box position-relative">
                            <img src="/images/blog.png" class="img-fluid" alt="">
                            <p class="category-blog position-absolute">Masakan</p>
                        </div>
                        <div class="card-body">
                            <small class="text-muted date-publish">10 April 2022</small>
                            <p class="title-blog">Rahasia Olahan Dapur
                                Disukai Keluarga Ibu-Ibu
                                Wajib Tau</p>
                            <a href="#">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-btn-more">
                <div class="col-12 text-center text-sm-end">
                    <a href="#" class="btn-pertama">Temukan Artikel Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Blog Section End --}}



    {{-- Script --}}
    @stack('prepend-script')
    @include('components.script')
    @stack('addon-script')
</body>

</html>
