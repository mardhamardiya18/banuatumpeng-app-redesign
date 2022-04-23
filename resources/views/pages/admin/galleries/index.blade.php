@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng - Kelola Produk Gallery
@endsection

@section('content-dashboard')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <h5 class="text-light">Kelola Produk Gallery</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product-gallery.create') }}" class="btn btn-danger mb-3">
                            + Tambah Gambar Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover scrolled w-100" id="crudTable">
                                <thead>
                                    <td>ID</td>
                                    <td>Nama Produk</td>
                                    <td>Photo</td>
                                    <td>Aksi</td>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{!! url()->current() !!}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'photos',
                    name: 'photos'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'

                }
            ]
        })
    </script>
@endpush
