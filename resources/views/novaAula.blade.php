@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UMA NOVA AULA</h1>
            </div>
        </div>
        <form action="{{route('gravaNovaAula')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="nomeAula">Nome:</label>
                <input type="text" class="form-control" name="nomeAula"
                placeholder="Informe o nome da aula">
            </div>

            <div class="form-group">
                <label for="dataAula">Data:</label>
                <input type="date" class="form-control" name="dataAula"
                placeholder="Informe a data da aula">
            </div>

            <div class="form-group">
                <label for="descricaoAula">Descrição:</label>
                <input type="text" class="form-control" name="descricaoAula"
                placeholder="Informe a desacrição da aula">
            </div>

            <div class="form-group">
                <label for="curso_id">Curso:</label>
                <select name="curso" id="curso_id">
                    @foreach ($dados as $item)
                        <option value="{{ $item->id }}">{{ $item->nomeCurso }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div>
                    <input type="checkbox" id="assitida" name="statusAula">
                    <label for="assistida">Concluída</label>
                </div>
            </div>

            <h3>Videoaula</h3>
            <div>

                <div class="form-group">
                    <div>
                        <input type="file" id="arquivo" name="arquivo">
                        <label id="RotuloArquivo" for="arquivo">Escolha o arquivo da aula</label>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="tituloArq">Título:</label>
                    <input type="text" class="form-control" name="descricaoArq"
                    placeholder="Informe o título do arquivo">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="hidden" id="A" name="tipoArq">
                    </div>
                </div>

            </div>
            
            <h3>Lista de Exercícios</h3>
            <div>

                <div class="form-group">
                    <div>
                        <input type="file" id="arquivo" name="arquivo">
                        <label id="RotuloArquivo" for="arquivo">Escolha o arquivo do exercício</label>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="tituloArq">Título:</label>
                    <input type="text" class="form-control" name="descricaoArq"
                    placeholder="Informe o título do arquivo">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="hidden" id="E" name="tipoArq">
                    </div>
                </div>
                
            </div>

            <h3>Resolução da Lista de Exercícios</h3>
            <div>

                <div class="form-group">
                    <div>
                        <input type="file" id="arquivo" name="arquivo">
                        <label id="RotuloArquivo" for="arquivo">Escolha o arquivo de resolução</label>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="tituloArq">Título:</label>
                    <input type="text" class="form-control" name="descricaoArq"
                    placeholder="Informe o título do arquivo">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="hidden" id="R" name="tipoArq">
                    </div>
                </div>
                
            </div>

            <h3>Arquivo Complementar (opcional)</h3>
            <div>

                <div class="form-group">
                    <div>
                        <input type="file" id="arquivo" name="arquivo">
                        <label id="RotuloArquivo" for="arquivo">Escolha o arquivo</label>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="tituloArq">Título:</label>
                    <input type="text" class="form-control" name="descricaoArq"
                    placeholder="Informe o título do arquivo">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <input type="hidden" id="C" name="tipoArq">
                    </div>
                </div>
                
            </div>
  
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/aulas';" type="button"
                class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection

