@extends('layout.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data supplier</h3>
              </div>
             
              <form method="POST" action="/supplier/update/{{$supplier->id}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id supplier</label>
                    <input type="text" name="id_supplier" class="form-control" id="" placeholder="" value="{{$supplier->id_supplier}}">
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Nama</label>
                    <input type="text" name="supplier_nama" class="form-control" id="" placeholder="" value="{{$supplier->supplier_nama}}">
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Alamat</label>
                    <input type="text" name="supplier_alamat" class="form-control" id="" placeholder="" value="{{$supplier->supplier_alamat}}">
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Phone</label>
                    <input type="text" name="supplier_phone" class="form-control" id="" placeholder="" value="{{$supplier->supplier_phone}}">
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Status</label>
                    <input type="text" name="supplier_status" class="form-control" id="" placeholder="" value="{{$supplier->supplier_status}}">       
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection