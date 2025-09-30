@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{ auth()->user()->name }}
                    @if(auth()->user()->tipo == 'A')
                        <h3>Você é administrador</h3>
                    @elseif(auth()->user()->tipo == 'U')
                        <h3>Você é usuário</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
