@extends('layouts.main')
@section('title', "Ahmazon")
@section('content')
<section class="col-md-12 products-section">
    <div id="cards-container" class="row">
    @foreach($products as $product)
        <div class="card col-2">
            <a href="/products/{{$product->id}}" class="d-block">
                <div class="card-body">
                    
                    @if($product->images->isNotEmpty())

                    <div class="img-container">
                        <img src="/img/products/{{$product->images->first()->image}}" alt="">
                    </div>

                    @else

                    <div class="img-container">
                        <img src="/img/placeholder.png" alt="">
                    </div>

                    @endif
                    <div><h5 class="card-name"> {{$product->name}} </h5></div>

                </div>
            </a>
        </div>
    @endforeach
    </div>
</section>

@endsection