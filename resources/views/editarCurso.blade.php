@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DA SUA OBRA</h1>
            </div>
        </div>
        <form action="/obras/{{ $dados->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeObra">Nome:</label>
                <input type="text" class="form-control" name="nomeObra"
                    value="{{ $dados->nomeObra }}">
            </div>
            <div class="form-group">
                <label for="artistaObra">Artista:</label>
                <input type="text" class="form-control" name="artistaObra"
                    value="{{ $dados->artistaObra }}">
            </div>
            <div class="form-group">
                <label for="tipoObra">Tipo:</label>
                <input type="text" class="form-control" name="tipoObra"
                    value="{{ $dados->tipoObra }}">
            </div>
            <div class="form-group">
                <label for="estiloObra">Estilo:</label>
                <input type="text" class="form-control" name="estiloObra"
                    value="{{ $dados->estiloObra }}">
            </div>
            <div class="form-group">
                <label for="imagemObra">Imagem:</label>
                <input type="text" class="form-control" name="imagemObra"
                    value="{{ $dados->imagemObra }}">
            </div>
            <div class="form-group">
                <label for="dataObra">Data:</label>
                <input type="number" class="form-control" name="dataObra"
                    value="{{ $dados->dataObra }}">
            </div>
        
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{ route('indexObras') }}';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection
