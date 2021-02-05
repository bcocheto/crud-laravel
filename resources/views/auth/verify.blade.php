@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado para o seu email.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, por favor cheque a verificação enviada pra seu email.') }}
                    {{ __('Se você não recebeu o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __(' clique aqui para reenviar a solicitação.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
