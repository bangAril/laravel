@extends('layout.master')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/detail/tambah" class="btn btn-primary">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($detail as $row)
                 <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                    <td>
                      <a href="transaksi/ubah/{{$row->id}}" class="btn btn-warning">Edit</a>
                      <a href="transaksi/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>                  
                    </td>
                  </tr>
@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection