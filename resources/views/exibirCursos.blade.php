@extends('layout')
@section('content')
<div class="card border">

    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif

    <div class="card-body cor">
        <h5 class="card-title" style="text-align: center">Cadastro de Cursos</h5>
        <div class="row">
            @foreach ($dados as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item->nomeCurso }}</b></h5>
                            <p class="card-text"><b>Carga Horária: </b>{{ $item->cargaHoraria }}</p>
                            <p class="card-text"><b>Descrição: </b>{{ $item->descricao }}</p>
                            <p class="card-text"><b>Valor:</b> {{ $item->valor }}</p>
                            <p class="card-text"><b>Recomendações:</b> {{ $item->recomendacoes }}</p>
                            <p class="card-text"><b>ID:</b> {{ $item->id }}</p>    
                            <a href="/cursos/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar</a>
                            <a href="/cursos/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

