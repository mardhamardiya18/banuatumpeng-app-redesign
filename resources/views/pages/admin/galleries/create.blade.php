@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng | Buat Produk Gallery
@endsection

@section('content-dashboard')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class=" text-white">Tambah Gambar Produk</h5>
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
                        <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Pilih Produk</label>
                                        <select name="products_id" id="name" class="form-control">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Pilih Gambar</label>
                                        <input type="file" name="photos" class="form-control">
                                        <small class="text-muted">*recommend 230 x 200 px</small>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('product-gallery.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Save Gambar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
