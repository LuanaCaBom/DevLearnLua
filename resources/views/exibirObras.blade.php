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
        <h5 class="card-title" style="text-align: center">Cadastro de Obras</h5>
        <div class="row">
            @foreach ($dados as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="/storage/{{ $item->imagemObra }}" alt="Imagem de capa do card" height="400" width="10%">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item->nomeObra }}</b></h5>
                            <p class="card-text"><b>Artista: </b>{{ $item->artistaObra }}</p>
                            <p class="card-text"><b>Data: </b>{{ $item->dataObra }}</p>
                            <p class="card-text"><b>Tipo:</b> {{ $item->tipoObra }}</p>
                            <p class="card-text"><b>Estilo:</b> {{ $item->estiloObra }}</p>
                            <p class="card-text"><b>ID:</b> {{ $item->id }}</p>    
                            <a href="/obras/editar/{{ $item->id }}" class="btn btn-outline-primary">Editar</a>
                            <a href="/obras/apagar/{{ $item->id }}" class="btn btn-outline-danger"
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

