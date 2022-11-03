@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data jenis</h3>
              </div>
             
              <form method="POST" action="/jenis/update/{{$jenis->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id jenis</label>
                    <input type="text" name="id_jenis" class="form-control" id="" placeholder="" value="{{$jenis->id_jenis}}">
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" name="jenis_nama" class="form-control" id="" placeholder="" value="{{$jenis->jenis_nama}}">
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" name="jenis_status" class="form-control" id="" placeholder="" value="{{$jenis->jenis_status}}">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection