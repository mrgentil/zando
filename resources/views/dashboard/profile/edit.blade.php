@extends('layouts.dashboard')
@section('title') @parent | Tableau de bord utilisateur @endsection

@section('keywords') @parent, Tableau de bord utilisateur @endsection

@section('description') Tableau de bord utilisateur @endsection
@section('content')
<div class="bg-gray">
    <div class="container-fluid">
        <div class="max-w700 m-auto">
            <form class="business-supplier bns-form" action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-box">
                    <h4 class="title">Mise à jour du profil</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 mx-auto text-center mb-3">
                                @include('flash::message')
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 mx-auto text-center mb-3">
                                <img src="{{ auth()->user()->avatarLink }}" class="img-fluid" style="border-radius: 50%;height: 150px;width: 150px;">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="form-group">
                                    <input type="file" name="avatar" accept="image/*" >
                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="label-title">Nom</label>
                                <input type="text" name="last_name"
                                       class="form-control @error('last_name') is-invalid @enderror"
                                       value="{{ (old('last_name')) ? old('last_name') : ((isset(auth()->user()->last_name) ? auth()->user()->last_name : '')) }}"
                                       class="form-control" placeholder="Nom">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="label-title">Prénom</label>
                                <input type="text" name="first_name"
                                       class="form-control @error('first_name') is-invalid @enderror"
                                       value="{{ (old('first_name')) ? old('first_name') : ((isset(auth()->user()->first_name) ? auth()->user()->first_name : '')) }}"
                                       placeholder="Prénom">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="label-title">Nom d'utilisateur</label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ (old('name')) ? old('name') : ((isset(auth()->user()->name) ? auth()->user()->name : '')) }}"
                                       placeholder="Nom d'utilisateur">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="label-title">Email</label>
                                <input type="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ (old('email')) ? old('email') : ((isset(auth()->user()->email) ? auth()->user()->email : '')) }}"
                                       placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="label-title">Numéro WhatsApp</label>
                                <input type="tel" name="whatsapp"
                                       class="form-control @error('whatsapp') is-invalid @enderror"
                                       value="{{ (old('whatsapp')) ? old('whatsapp') : ((isset(auth()->user()->whatsapp) ? auth()->user()->whatsapp : '+243')) }}"
                                       placeholder="Numéro WhatsApp">
                                    @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="label-title" for="account">Type de compte</label>
                                <select class="form-control" name="account_id" id="account">
                                    @foreach($accounts as $account)
                                        <option {{ $account->id === auth()->user()->account_id ? 'selected' : '' }} value="{{ $account->id }}">{{ $account->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="label-title">Mot de passe</label>
                                <input type="password" name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Laissez vide pour concevoir l'actuel">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-b50 text-center">
                    <button type="submit" class="btn gradient blue btn-md">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
