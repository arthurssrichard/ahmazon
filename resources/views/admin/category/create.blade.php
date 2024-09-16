@extends('../layouts.admin')
@section('title', "Painel Administrador")
@section('content')
<h1>Nova categoria</h1>
<section class="ma-section">
    <form action="/categories" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Categoria:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome da categoria" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição da categoria"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Categoria">
    </form>
</section>
@endsection