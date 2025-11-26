@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">INSIRA UM ARQUIVO</h1>
            </div>
        </div>
        <form action="route{{'gravaNovoArquivo'}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="tituloArq">Nome:</label>
                <input type="text" class="form-control" name="tituloArq"
                placeholder="Informe o nome do arquivo">
            </div>

            <div class="form-group">
                <label for="tipoArq">Selecione o tipo do arquivo:</label>
                <input type="radio" name="tipoArq" value="A">
                <label for="A">Videoaula</label>
                <input type="radio" name="tipoArq" value="E">
                <label for="E">Exercício</label>
                <input type="radio" name="tipoArq" value="R">
                <label for="R">Resolução</label>
                <input type="radio" name="tipoArq" value="C">
                <label for="C">Outro</label>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="costm-file-input" name="arquivo" id="arquivo">
                    <label class="custom-file-label" id="RotuloArquivo" for="arquivo"></label>
                </div>
            </div>


            <div class="form-group">
                <input type="hidden" name="aula_id" value="{{$dados['id']}}">
            </div>
  
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/aulas';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection

