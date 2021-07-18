@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif

    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h1>KOPI</h1>
              <h4>Ketika Otak Perlu Inspirasi</h4>
              <p><i>Nikmati warna-warni hidupmu dengan ditemani secangkir Kopi :)</i></p>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo/iklan.png') }}" alt="">
      </div>
    </div>

        <div class="row m-0 pt-4">
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="{{ route('product.index') }}">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo/minuman.png') }}" alt="">
                <h5 class="pt-2">Minuman</h5>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo/makananberat.png') }}" alt="">
                <h5 class="pt-2">Makanan Berat</h5>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="{{ asset('photo/makananringan.png') }}" alt="">
                <h5 class="pt-2">Makanan Ringan</h5>
              </div>
            </a>
          </div>
        </div>



    <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      @foreach ($products as $product)    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="{{ route('product.show',['product'=>$product->id]) }}">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="{{ asset('/storage/'.$product->image) }}" alt=""></div>
                <div class="info-4"><h5>{{ $product->brand }}</h5></div>
                <div class="info-2"><a href="product/{{ $product->id }}"><h4>{{ $product->name }}</h4></a></div>
                <div class="info-3"><h5>Rp. {{ $product->price }}</h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>


</div>

@endsection