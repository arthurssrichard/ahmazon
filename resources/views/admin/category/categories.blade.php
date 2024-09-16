@extends('../layouts.admin')
@section('title', "Painel Administrador")
@section('content')
<h1>Categorias</h1>
<section class="ma-section">
<div class="row"><h2 class="col">Categorias ({{count($categories)}})</h2> <a href="categories/create" class="btn btn-primary col-2">Adicionar Nova</a></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricão</th>
                <th scope="col">Quant. Produtos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><a href="category/{{$category->id}}" class="table-link">{{$category->name}}</a></td>
                <td title="{{$category->description}}">{{Str::limit($category->description, 20);}}</td>
                <td>{{ count($category->products) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection