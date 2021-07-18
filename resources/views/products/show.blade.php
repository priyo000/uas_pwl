@extends('layouts.app')

@section ('content')

<div class="container p-0 show">
   <div class="row sixtyvh">
       <div class="col-lg-8 col-sm-12 mb-3 show-picture">
            <img src="{{ asset('/storage/'.$product->image) }}" alt="">
       </div>
       <div class="col-lg-4 col-sm-12 pl-5 pr-5">
        <h6><strong>{{ $product->brand }}</strong></h6>
        <h5>{{ $product->name }}</h5>
            <div class="card">
                <div class="card-body">
                    <div class="show-info">
                        <div class="info-1">
                            <h6>Pesan Hidangan</h6>
                        </div>
                        <div class="info-2">
                            <select id="size-dropdown">
                                <option selected="true" value="nothing" disabled hidden>Pilih Varian</option>
                                @foreach($sizes as $size)
                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="info-3">
                            <p>Hidangan akan segera di buat ketika anda melakukan Pemesanan :)
                            </p>
                        </div>
                        <a href="{{ route('cart.add',['product'=>$product->id]) }}" id="add-to-cart" class="add-to-cart disabled">
                            <div class="info-4">
                                ADD TO CART
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection