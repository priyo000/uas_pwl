@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">

    @if(Session::has('success'))
    <div class="row">
      <div class="col-12">
        <div id="charge-message" class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5>List Varian</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.addstockform') }}" class="btn btn-success mb-2" style="color:white; width:200px;">TAMBAH VARIAN</a>
            <select name="product-list" id="product-list" class="w-100 p-2 mb-2">
                <option selected="true" value="" disabled hidden>Pilih Hidangan</option>
                @foreach ($product_id as $id)
                <option value="{{ $id->id }}">{{ $id->id." - ".$id->name }}</option>
                @endforeach
                
            </select>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Varian</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="stock-list">

                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection