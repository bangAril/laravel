@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Admin</h3>
              </div>
             
              <form method="POST" action="/admin/update/{{$admin->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Admin</label>
                    <input type="text" name="id_admin" class="form-control" id="" placeholder="" value="{{$admin->id_admin}}">
                  </div>
                  <div class="form-group">
                    <label for="">Id Username</label>
                    <input type="text" name="username" class="form-control" id="" placeholder="" value="{{$admin->username}}">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" id="" placeholder="" value="{{$admin->password}}">
                  </div>
                  <div class="form-group">
                    <label for="">Admin Level</label>
                    <input type="text" name="admin_level" class="form-control" id="" placeholder="" value="{{$admin->admin_level}}">
                  </div>
                  <div class="form-group">
                    <label for="">Admin Nama</label>
                    <input type="text" name="admin_nama" class="form-control" id="" placeholder="" value="{{$admin->admin_nama}}">
                  </div>
                  <div class="form-group">
                    <label for="">Admin Status</label>
                    <input type="text" name="admin_status" class="form-control" id="" placeholder="" value="{{$admin->admin_status}}">
                  </div>
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection