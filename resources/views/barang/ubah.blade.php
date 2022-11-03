@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data barang</h3>
              </div>
             
              <form method="POST" action="/barang/update/{{$barang->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id barang</label>
                    <input type="text" name="id_barang" class="form-control" id="" placeholder="" value="{{$barang->id_barang}}">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Kode</label>
                    <input type="text" name="barang_kode" class="form-control" id="" placeholder="" value="{{$barang->barang_kode}}">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Nama</label>
                    <input type="text" name="barang_nama" class="form-control" id="" placeholder="" value="{{$barang->barang_nama}}">
                  </div>
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <input type="text" name="id_jenis" class="form-control" id="" placeholder="" value="{{$barang->id_jenis}}">
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <input type="text" name="id_supplier" class="form-control" id="" placeholder="" value="{{$barang->id_supplier}}">
                  </div>
                  <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="text" name="harga_jual" class="form-control" id="" placeholder="" value="{{$barang->harga_jual}}">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Status</label>
                    <input type="text" name="barang_status" class="form-control" id="" placeholder="" value="{{$barang->barang_status}}">
                  </div>
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection