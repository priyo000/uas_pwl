@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">

    <h5>ADD STOCK</h5>
    <hr>

    <form method="POST" action="{{ route('admin.addstock')}}" enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="col-12">
                <label for="product" class="">{{ __('Hidangan') }}</label>
                <div class="form-group">
                    <select name="product" id="addproductstock" class="form-control">
                        <option selected="true" value="" disabled hidden>Pilih Hidangan</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->id.' - '.$product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <label for="size" class="">{{ __('Varian') }}</label>
                <div class="form-group">
                    <div>
                        <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size" autofocus>
                        @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        
        <button type="submit" class="btn btn-success w-100">TAMBAH VARIAN</button>
    
    </form>

</div>
    
@endsection