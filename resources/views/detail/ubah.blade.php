@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Transaksi</h3>
              </div>
             
              <form method="POST" action="/transaksi/update/{{$transaksi->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Admin</label>
                    <input type="text" name="id_admin" class="form-control" id="" placeholder="" value="{{$transaksi->id_admin}}">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Tanggal</label>
                    <input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder="" value="{{$transaksi->transaksi_tanggal}}">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi No Nota</label>
                    <input type="text" name="transaksi_nonota" class="form-control" id="" placeholder="" value="{{$transaksi->transaksi_nonota}}">
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Status</label>
                    <input type="text" name="transaksi_status" class="form-control" id="" placeholder="" value="{{$transaksi->transaksi_status}}">       
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection