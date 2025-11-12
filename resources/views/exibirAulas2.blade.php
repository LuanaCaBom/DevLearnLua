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
        @foreach ($dados as $item)
            <h5 class="card-title" style="text-align: center">{{ $item->nomeAula }}</h5>
            <div class="row">
                
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                        <p class="card-text"><b>Descrição: </b>{{ $item->descricaoAula }}</p>
                        <p class="card-text"><b>Data:</b> {{ $item->dataAula }}</p>
                        <div>
                            <input type="checkbox" id="assitida" name="statusAula">
                            <label for="assistida">Concluída</label>
                        </div>
                        <a href="/aulas/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar</a>
                        <a href="/aulas/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                            onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                    </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

