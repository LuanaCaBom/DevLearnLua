@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DA SUA AULA</h1>
            </div>
        </div>
        <form action="/aulas/{{ $dados->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeAula">Nome:</label>
                <input type="text" class="form-control" name="nomeAula"
                value="{{ $dados->nomeAula }}">
            </div>

            <div class="form-group">
                <label for="dataAula">Data:</label>
                <input type="date" class="form-control" name="dataAula"
                value="{{ $dados->dataAula }}">
            </div>

            <div class="form-group">
                <label for="descricaoAula">Descrição:</label>
                <input type="text" class="form-control" name="descricaoAula"
                value="{{ $dados->descricaoAula }}">
            </div>

            <div class="form-group">
                <label for="curso_id">Curso:</label>
                <select name="curso" id="curso_id">
                    @foreach ($cursos as $item)
                        @if($item->id == $dados->curso_id)
                             <option selected value="{{ $item }}">{{ $item->nomeCurso }}</option>
                        @else
                            <option value="{{ $item }}">{{ $item->nomeCurso }}</option>
                        @endif

                    @endforeach
                </select>
            </div>
        
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{ route('indexCursos') }}';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection
