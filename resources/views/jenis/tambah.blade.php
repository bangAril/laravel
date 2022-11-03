@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data jenis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/jenis/simpan">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" name="jenis_nama" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" name="jenis_status" class="form-control" id="" placeholder="">
                  </div>
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection