@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng | Buat User
@endsection

@section('content-dashboard')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class=" text-white">Tambah User Baru</h5>
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
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" required class="form-control" autofocus>
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="role">Role</label>
                                    <select name="role" class="form-control" id="role">
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="USER">USER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-success">Buat User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
