@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UMA NOVA OBRA</h1>
            </div>
        </div>
        <form action="{{route('gravaNovaObra')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="nomeObra">Nome:</label>
                <input type="text" class="form-control" name="nomeObra"
                       placeholder="Informe o nome da obra">
            </div>
            <div class="form-group">
                <label for="artistaObra">Artista:</label>
                <input type="text" class="form-control" name="artistaObra"
                placeholder="Informe o artista da obra">
            </div>
            <div class="form-group">
                <label for="tipoObra">Tipo:</label>
                <input type="text" class="form-control" name="tipoObra"
                placeholder="Informe o tipo da obra">
            </div>
            <div class="form-group">
                <label for="estiloObra">Estilo:</label>
                <input type="text" class="form-control" name="estiloObra"
                placeholder="Informe o estilo da obra">
            </div>
            <div class="custom-file">
                <label class="custom-file-lable" for="imagemObra">Imagem:</label>
                <input type="file" class="custom-file-input" name="imagemObra">
            </div>
            <div class="form-group">
                <label for="dataObra">Data:</label>
                <input type="number" class="form-control" name="dataObra"
                placeholder="Informe a data da obra">
            </div>
        
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/obras';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection

