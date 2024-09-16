@extends('../layouts.admin')
@section('title', "Editar produto")
@section('content')
<h1>Produto {{$product->name}} ({{$product->id}})</h1>
<section class="ma-section">
    <form action="/admin/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="form-group">
                <label for="name">Produto:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto" value="{{$product->name}}" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto">{{$product->description}}</textarea>
            </div>

            <div class="form-group row w-50">
                <div class="col">
                    <label for="price">Preço:</label>
                    <input type="number" class="form-control" name="price" value="{{$product->price}}" step="0.01" required>
                </div>
                <div class="col">
                    <label for="stock_quantity">Quantidade no estoque:</label>
                    <input type="number" class="form-control" name="stock_quantity" value="{{$product->stock_quantity}}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="category">Categoria: </label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">

                <div class="col-4 form-image">
                    <label for="image1">Imagem 1:</label>
                    <input type="file" id="image1" name="images[]" class="form-control-file">
                    @if(isset($images[0]))
                    <div class="img-container">
                        <img src="/img/products/{{$images[0]->image}}" alt="">
                    </div>

                    @else
                    <div class="img-container">
                        <img src="/img/placeholder.png" alt="">
                    </div>
                    @endif
                </div>

                <div class="col-4 form-image">
                    <label for="image2">Imagem 2:</label>
                    <input type="file" id="image2" name="images[]" class="form-control-file">
                    @if(isset($images[1]))
                    <div class="img-container">
                        <img src="/img/products/{{$images[1]->image}}" alt="">
                    </div>

                    @else
                    <div class="img-container">
                        <img src="/img/placeholder.png" alt="">
                    </div>
                    @endif
                </div>

                <div class="col-4 form-image">
                    <label for="image3">Imagem 3:</label>
                    <input type="file" id="image3" name="images[]" class="form-control-file">
                    @if(isset($images[2]))
                    <div class="img-container">
                        <img src="/img/products/{{$images[2]->image}}" alt="">
                    </div>

                    @else
                    <div class="img-container">
                        <img src="/img/placeholder.png" alt="">
                    </div>
                    @endif
                </div>

            </div>



            <input type="submit" class="btn btn-primary" value="Adicionar Produto">
    </form>
@endsection