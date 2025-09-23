@extends('layout')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="jumbotron jumbotron-fluid w-100 text-center">
        <div class="container">
            <h1 class="mt-5">Obras</h1>
        </div>
    </div>
    <div class="container text-center">
        <p class="lead">Cadastre aqui uma obra de arte.</p>
        <img class="img-fluid mb-3" src="{{ asset('storage/fotos/fuscas.jpg') }}" width="600" height="400">
        <p class="lead">Utilize o menu ao lado para acessar as funcionalidades do sistema.</p>
    </div>
</div>
@endsection
