@extends('layouts.admin-dashboard')

@section('title-dashboard')
    Banuatumpeng - Kelola Pesanan
@endsection

@section('content-dashboard')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <h5 class="text-light">Kelola Pesanan</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover scrolled w-100" id="crudTable">
                                <thead>
                                    <td>ID</td>
                                    <td>Nama Customer</td>
                                    <td>Nama Produk</td>
                                    <td>Jumlah</td>
                                    <td>Status Pembayaran</td>
                                    <td>Tanggal Transaksi</td>
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
                    data: 'transaction.user.name',
                    name: 'transaction.user.name'
                },
                {
                    data: 'transaction.product.name',
                    name: 'transaction.product.name'
                },
                {
                    data: 'quantity',
                    name: 'quantity'
                },
                {
                    data: 'payment_status',
                    name: 'payment_status'
                },

                {
                    data: 'created_at',
                    name: 'created_at',

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
