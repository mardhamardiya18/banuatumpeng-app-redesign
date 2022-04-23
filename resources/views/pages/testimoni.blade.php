@extends('layouts.app')

@section('title')
    Banuatumpeng | Testimoni
@endsection

@section('content')
    <section class="home form-testi" id="home">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h3 class="heading-testi">
                        Berikan Kami Penilaian Mengenai Kepuasan Anda😃
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <form action="{{ route('testimoni-store') }}" method="POST" enctype="multipart/form-data"
                        id="contactForm">
                        @csrf

                        <input type="hidden" name="users_id" value="1">
                        <!-- Name input -->
                        <div class="mb-3">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Nama" required />
                        </div>

                        <!-- Email address input -->
                        <div class="mb-3">
                            <input class="form-control" name="address" id="emailAddress" type="text" required
                                placeholder="Alamat contoh: Banjarbaru,Cindai alus,Landasan ulin.." />
                        </div>

                        <!-- Message input -->
                        <div class="mb-3">
                            <textarea class="form-control" name="content" id="message" type="text" placeholder="Berikan komentar anda disini😇"
                                style="height: 10rem" required></textarea>
                        </div>

                        {{-- rating start --}}
                        <p>Berikan ratingmu</p>
                        <div class="rating d-flex flex-row-reverse justify-content-end">
                            <input name="rating" required value="sangat puas banget" id="e5" type="radio"><label
                                title="Sangat Puas Banget" for="e5">★</label>
                            <input name="rating" required value="puas banget" id="e4" type="radio"><label
                                title="Puas Banget" for="e4">★</label>
                            <input name="rating" required value="puas" id="e3" type="radio"><label title="Puas"
                                for="e3">★</label>
                            <input name="rating" required value="kurang puas" id="e2" type="radio"><label
                                title="Kurang Puas" for="e2">★</label>
                            <input name="rating" required value="tidak puas" id="e1" type="radio"><label title="Tidak Puas"
                                for="e1">★</label>
                        </div>
                        {{-- rating end --}}

                        <!-- Form submit button -->
                        <div class="d-grid mt-4">
                            <button class="btn-pertama" type="submit">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
