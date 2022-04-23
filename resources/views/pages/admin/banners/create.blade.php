@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng | Buat Banner
@endsection

@section('content-dashboard')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class=" text-white">Tambah Banner</h5>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nama Event</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Link Action</label>
                                        <input type="text" name="url" class="form-control">
                                        <small class="text-muted">*mau diarahkan kemana banner setelah di klik</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Pilih Gambar</label>
                                        <input type="file" name="photos" class="form-control">
                                        <small class="text-muted">*recommend 1320 x 500 px</small>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('banner.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Save Banner</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
