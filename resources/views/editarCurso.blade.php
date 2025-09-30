@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO SEU CURSO</h1>
            </div>
        </div>
        <form action="/cursos/{{ $dados->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCurso">Nome:</label>
                <input type="text" class="form-control" name="nomeCurso"
                    value="{{ $dados->nomeCurso }}">
            </div>
            <div class="form-group">
                <label for="cargaHoraria">Carga Horária:</label>
                <input type="number" class="form-control" name="cargaHoraria"
                    value="{{ $dados->cargaHoraria }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" name="descricao"
                    value="{{ $dados->descricao }}">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor"
                    value="{{ $dados->valor }}">
            </div>
            <div class="form-group">
                <label for="recomendacoes">Recomendações:</label>
                <input type="text" class="form-control" name="recomendacoes"
                    value="{{ $dados->recomendacoes }}">
            </div>
        
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{ route('indexCursos') }}';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection
