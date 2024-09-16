@extends('../layouts.admin')
@section('title', "Painel Administrador")
@section('content')
<h1>Produtos</h1>
<section class="ma-section">
    <div class="row"><h2 class="col">Produtos ({{count($products)}})</h2> <a href="products/create" class="btn btn-primary col-2">Adicionar Novo</a></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Estoque</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href="product/{{$product->id}}" class="table-link">{{$product->name}}</a></td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock_quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection