@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng | Buat Paket
@endsection

@section('content-dashboard')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class=" text-white">Tambah Kategori Baru</h5>
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
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Nama Kategory</label>
                                    <input type="text" name="name" required class="form-control" autofocus>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('category.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Save Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
