@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('procurarObra') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nomeObra">Nome da Obra</label>
                <input type="text" class="form-control" name="nomeObra"
                    placeholder="Informe o nome da obra para pesquisar">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{ route('indexObras') }}';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection