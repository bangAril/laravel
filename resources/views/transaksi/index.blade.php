@extends('layout.master')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/transaksi/tambah" class="btn btn-primary">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi No Nota</th>
                    <th>Transaksi Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($transaksi as $row)
                 <tr>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->id_admin}}</td>
                    <td>{{$row->transaksi_tanggal}}</td>
                    <td>{{$row->transaksi_nonota}}</td>
                    <td>{{$row->transaksi_status}}</td>
                    <td>
                      <a href="detail/detail/{{$row->id_transaksi}}" class="btn btn-success">Detail</a>
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