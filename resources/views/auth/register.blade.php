@extends('layouts.auth')

@section('title')
    Inscrition
@endsection

@section('content')
    <div class="fxt-form">
        <h2>S'inscrire</h2>
        <p style="color:#FFF">Créer un compte gratuit et en profiter</p>
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input id="name" type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name"
                           placeholder="Nom" value="{{ old('name') }}" required autocomplete="name"
                           autofocus>
                    <i class="flaticon-user"></i>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input id="whatsapp" type="tel"
                           class="form-control @error('whatsapp') is-invalid @enderror"
                           name="whatsapp"
                           placeholder="Numero Whatsapp" value="{{ old('whatsapp') }}" required
                           autocomplete="whatsapp"
                           autofocus>
                    <i class="flaticon-user"></i>
                    @error('whatsapp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <select class="form-control @error('account_id') is-invalid @enderror" id="exampleFormControlSelect1" name="account_id">
                        @foreach($accounts as $account)
                        <option value="{{ $account->id }}">{{ $account->name }}</option>
                        @endforeach
                    </select>

                    @error('account_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-2">
                    <input id="email" type="email" class="form-control @error('email')
                        is-invalid @enderror" name="email" placeholder="Email Address"
                           value="{{ old('email') }}" required autocomplete="email">
                    <i class="flaticon-envelope"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-3">
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="Password"
                           required autocomplete="new-password">
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
                    <input id="password-confirm" type="password"
                           class="form-control" name="password_confirmation"
                           placeholder="Confirme mot de passe"
                           required autocomplete="new-password">
                    <i class="flaticon-padlock"></i>
                </div>
            </div>
            <div class="form-group">
                <div class="fxt-transformY-50 fxt-transition-delay-4">
                    <button type="submit" class="fxt-btn-fill">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
@stop
