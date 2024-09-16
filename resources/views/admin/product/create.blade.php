@extends('layouts.admin')
@section('title', "Painel Administrador")
@section('content')
<h1>Adicionar Produto</h1>
<section class="ma-section">
    <form action="/products" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="form-group">
                <label for="name">Produto:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto"></textarea>
            </div>

            <div class="form-group row w-50">
                <div class="col">
                    <label for="price">Preço:</label>
                    <input type="number" class="form-control" name="price" step="0.01" required>
                </div>
                <div class="col">
                    <label for="stock_quantity">Quantidade no estoque:</label>
                    <input type="number" class="form-control" name="stock_quantity" required>
                </div>
            </div>

            <div class="form-group">
                <label for="category">Categoria: </label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <div class="col-4">
                    <label for="image1">Imagem 1:</label>
                    <input type="file" id="image1" name="images[]" class="form-control-file">
                    
                </div>
                <div class="col-4">
                    <label for="image2">Imagem 2:</label>
                    <input type="file" id="image2" name="images[]" class="form-control-file">
                </div>
                <div class="col-4">
                    <label for="image3">Imagem 3:</label>
                    <input type="file" id="image3" name="images[]" class="form-control-file">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Adicionar Produto">
    </form>
</section>
@endsection