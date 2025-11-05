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
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item->nomeAula }}</b></h5>
                            <p class="card-text"><b>Data: </b>{{ $item->dataAula }}</p>
                            <p class="card-text"><b>Descrição: </b>{{ $item->descricaoAula }}</p>
                            <p class="card-text"><b>Status: </b> {{ $item->statusAula }}</p>
                            <p class="card-text"><b>ID:</b> {{ $item->id }}</p>
                            <a href="/aulas/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar</a>
                            <a href="/aulas/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

