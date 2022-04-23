@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng | Buat Produk
@endsection

@section('content-dashboard')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class=" text-white">Tambah Produk Baru</h5>
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
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Pilih Kategory</label>
                                        <select name="categories_id" id="name" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Harga Produk</label>
                                        <input type="number" name="price" class="form-control">
                                        <small class="text-muted">*jangan ada titik/koma</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Deskripsi Produk</label>
                                        <textarea name="description" id="editor"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('product.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Save Produk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
