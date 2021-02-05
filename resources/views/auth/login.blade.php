@extends('layouts.welcome')

@section('content')


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrar</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<label for="password" class="label">{{ __('Password') }}</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror input" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar login?') }}
                                    </label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="{{ __('Login') }}">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    @if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                    @endif
				</div>
			</div>
                </form>
			<div class="sign-up-htm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
				<div class="group">
					<label for="name" class="label">{{ __('Nome') }}</label>
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				</div>
				<div class="group">
					<label for="password" class="label">{{ __('Senha') }}</label>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror input" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<label for="password-confirm" class="label">{{ __('Confirmar Senha') }}</label>
					<input d="password-confirm" type="password" class="form-control input" name="password_confirmation" required autocomplete="new-password">
				</div>
				<div class="group">
					<label for="email" class="label">{{ __('E-Mail') }}</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
                    <button type="submit" class="button">
                                    {{ __('Registrar') }}
                                </button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Já é registrado?</a>
				</div>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection
