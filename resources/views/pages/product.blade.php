@extends('layouts.app')

@section('title')
    Banuatumpeng | Semua Produk
@endsection

@section('content')
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
                @php
                    $increment = 0;
                @endphp

                @forelse ($products as $product)
                    <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="{{ $increment += 100 }}">
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
@endsection
