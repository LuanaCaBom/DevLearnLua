@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO CURSO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoCurso')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="nomeCurso">Nome:</label>
                <input type="text" class="form-control" name="nomeCurso"
                placeholder="Informe o nome do curso">
            </div>
            <div class="form-group">
                <label for="cargaHoraria">Carga Horária:</label>
                <input type="number" class="form-control" name="cargaHoraria"
                placeholder="Informe a carga horária do curso">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" name="descricao"
                placeholder="Informe a desacrição do curso">
            </div>
            <div class="form-group">
               <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor"
                placeholder="Informe o valor do curso">
            </div>

            <!--
            <div class="custom-file">
                <label class="custom-file-lable" for="imagemObra">Imagem:</label>
                <input type="file" class="custom-file-input" name="imagemObra">
            </div>
            -->

            <div class="form-group">
                <label for="recomendacoes">Recomendações:</label>
                <input type="text" class="form-control" name="recomendacoes"
                placeholder="Informe as recomendações do curso">
            </div>
  
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/cursos';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection

