@extends('layouts.auth')

@section('title')
    Connexion
@endsection

@section('content')
    <div class="fxt-form">
        <h2>Se connecter</h2>
        <p style="color:#FFF">Connectez-vous pour continuer sur notre site</p>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input type="email" id="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email" placeholder="Adresse Email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="flaticon-envelope"></i>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-2">
                    <input id="password" type="password" class="form-control @error('password')
                        is-invalid @enderror" name="password" placeholder="Mot de passe"
                           required autocomplete="current-password">
                    <i class="flaticon-padlock"></i>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-3">
                    <div class="fxt-content-between">
                        <button type="submit" class="fxt-btn-fill">Connexion</button>
                        @if (Route::has('password.request'))
                            <a class="switcher-text2" href="{{ route('password.request') }}">
                                Mot de passe oublié
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
 @stop
