@extends('layouts.main')
@section('title', "Ahmazon")
@section('content')

<section class="row">
    <div class="product-image col-6">

        <div class="img-container">
            <img src="/img/products/{{$product->images->first()->image}}" alt="">
        </div>

    </div>

    <div class="product-data col-6">
        <h1>{{$product->name}}</h1>
        <hr>
        <h2>R$ {{number_format($product->price, 2, ",", ".")}}</h2>
        <hr>
        <h3>Descrição do produto:</h3>
        <p>{{$product->description}}</p>
    </div>
</section>
@endsection