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
        <h5 class="card-title" style="text-align: center">Aulas</h5>
        <a href="{{route('novaAula')}}">Cadastrar Aula</a>
        <div class="row">
            @foreach ($dados as $item)
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h5 class="card-title"><b>{{ $item->nomeAula }}</b></h5>
                    <a href="/aulas2" class="btn btn-outline-success">Ver mais</a>
                    <a href="/aulas/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar Dados</a>
                    <a href="/aulas/editar/{{ $item->id }}" class="btn btn-outline-warning">Inserir Material</a>
                    <a href="/aulas/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                        onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

