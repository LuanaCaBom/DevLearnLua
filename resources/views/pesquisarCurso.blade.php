@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('procurarCurso') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nomeObra">Nome do Curso</label>
                <input type="text" class="form-control" name="nomeCurso"
                    placeholder="Informe o nome do curso para pesquisar">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{ route('indexCursos') }}';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection