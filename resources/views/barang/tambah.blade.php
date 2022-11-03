@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/barang/simpan">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Barang Kode</label>
                    <input type="text" name="barang_kode" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Nama</label>
                    <input type="text" name="barang_nama" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <select name="id_jenis" id="" class="form-control">
                        <option value="">Silahkan Anda Pilih</option>
                        @foreach($jenis as $row)
                        <option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <select name="id_supplier" id="" class="form-control">
                        <option value="">Silahkan Anda Pilih</option>
                        @foreach($supplier as $row)
                        <option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="text" name="harga_jual" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">barang Status</label>
                    <input type="text" name="barang_status" class="form-control" id="" placeholder="">
                  </div>
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection