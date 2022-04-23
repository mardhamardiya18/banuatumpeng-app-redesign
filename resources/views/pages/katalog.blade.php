@extends('layouts.app')

@section('title')
    Banuatumpeng | Katalog Produk
@endsection

@section('content')
    {{-- Banner Section Start --}}
    <section class="home banner">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Swiper -->
                    <div class="swiper mySwiperBanner">
                        <div class="swiper-wrapper">
                            @forelse ($banners as $banner)
                                <div class="swiper-slide">
                                    <a href="{{ $banner->url }}" title="{{ $banner->name }}">
                                        <img src="{{ Storage::url($banner->photos) }}" class="img-fluid"
                                            alt="{{ $banner->name }}">
                                    </a>
                                </div>
                            @empty
                                <h5 class="text-center m-auto">---Tidak Ada Banner---</h5>
                            @endforelse

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Banner Section End --}}

    {{-- Product Section Start --}}
    <section class="paket section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading-section">Pilihan Paket</h1>
                    <div class="row categories">
                        <div class="col-lg-9 d-flex justify-content-start justify-content-lg-start flex-wrap">
                            <div class=" d-flex align-items-center">
                                <a href="{{ route('category') }}"
                                    class="btn {{ Request::url() == route('category') ? 'btn-pertama' : 'btn-kedua' }}">Semua</a>
                            </div>
                            @foreach ($categories as $category)
                                <a href="{{ route('category-detail', $category->slug) }}"
                                    class="btn {{ Request::url() == route('category-detail', $category->slug) ? 'btn-pertama' : 'btn-kedua' }} m-2">{{ $category->name }}</a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-paket">
                @forelse ($products as $product)
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="card">
                            <div class="img-box text-center p-4 mx-auto">
                                @if ($product->gallery->count())
                                    <img src="{{ Storage::url($product->gallery->first()->photos) }}"
                                        class="img-fluid" alt="">
                                @else
                                    <img src="https://via.placeholder.com/230/000000/FFFFFF/?text=none photo"
                                        alt="Banua tumpeng" class="rounded-3">
                                @endif


                            </div>

                            <div class="card-body px-4 position-relative">
                                <h3 class="product-name">{{ $product->name }}</h3>
                                <p class="porsi">{{ $product->category->name }}</p>

                                <p class="price">Rp {{ number_format($product->price) }}</p>
                                <a href="{{ route('product-detail', $product->slug) }}"
                                    class="btn-cart position-absolute bottom-0 end-0"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h5>--Tidak Ada Produk Yang Ditampilkan--</h5>
                    </div>
                @endforelse


            </div>
        </div>
    </section>
    {{-- Product Section End --}}

    {{-- Banner2 --}}
    <div class="container section-margin">
        <div class="row">
            <div class="col-12">
                <img src="/images/bannersecond.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    {{-- Best Seller Start --}}
    <section class="seller section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading-section">Paket Best Seller</h1>
                </div>
            </div>
            <div class="row row-paket">
                <div class="col-lg-3 col-md-6">
                    <div class="card position-relative">
                        <div class="img-box text-center p-4 mx-auto">
                            <img src="/images/tumpeng.png" class="img-fluid" alt="">
                        </div>

                        <div class="card-body px-4 position-relative">
                            <div class="rating">
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                            </div>
                            <h3 class="product-name">Tumpeng Besar</h3>
                            <p class="porsi">Porsi 5 Orang</p>

                            <p class="price">Rp 300.000</p>
                            <a href="#" class="btn-cart position-absolute bottom-0 end-0"><i class='bx bx-cart'></i></a>
                        </div>
                        <span class="label-recomended badge bg-danger position-absolute">Recommended</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-sm-0">
                    <div class="card">
                        <div class="img-box text-center p-4 mx-auto">
                            <img src="/images/tumpeng.png" class="img-fluid" alt="">
                        </div>

                        <div class="card-body px-4 position-relative">
                            <div class="rating">
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star-half bx-sm"></i>
                            </div>
                            <h3 class="product-name">Tumpeng Besar</h3>
                            <p class="porsi">Porsi 5 Orang</p>

                            <p class="price">Rp 300.000</p>
                            <a href="#" class="btn-cart position-absolute bottom-0 end-0"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="img-box text-center p-4 mx-auto">
                            <img src="/images/tumpeng.png" class="img-fluid" alt="">
                        </div>

                        <div class="card-body px-4 position-relative">
                            <div class="rating">
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bx-star bx-sm"></i>
                            </div>
                            <h3 class="product-name">Tumpeng Besar</h3>
                            <p class="porsi">Porsi 5 Orang</p>

                            <p class="price">Rp 300.000</p>
                            <a href="#" class="btn-cart position-absolute bottom-0 end-0"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="img-box text-center p-4 mx-auto">
                            <img src="/images/tumpeng.png" class="img-fluid" alt="">
                        </div>

                        <div class="card-body px-4 position-relative">
                            <div class="rating">
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star bx-sm"></i>
                                <i class="bx bxs-star-half bx-sm"></i>
                            </div>
                            <h3 class="product-name">Tumpeng Besar</h3>
                            <p class="porsi">Porsi 5 Orang</p>

                            <p class="price">Rp 300.000</p>
                            <a href="#" class="btn-cart position-absolute bottom-0 end-0"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Best seller End --}}

    {{-- Subscribe Section Start --}}
    <section class="subscribe section-margin px-2">
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-lg-6 col-10">
                    <p class="label-section text-white">subscriptions</p>
                    <h1 class="heading-section text-white">Dapatkan Informasi Up to Date
                        Dari Banuatumpeng</h1>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-5">
                <div class="col-md-8 col-10">
                    <form>
                        <div class="form-group bg-white d-flex justify-content-between px-4 py-2 flex-column flex-sm-row">
                            <input type="email" required class=" w-100 border-0 text-center text-sm-start"
                                placeholder="Masukan email anda">
                            <button type="submit" class="btn-pertama mt-4 mt-sm-0">Subscribe</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    {{-- Subscribe Section End --}}
@endsection

@push('addon-style')
    <link rel="stylesheet" href="/style/admin-dashboard.css">
@endpush
