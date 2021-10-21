@extends('layouts.dashboard')
@section('title') @parent | Tableau de bord utilisateur @endsection

@section('keywords') @parent, Tableau de bord utilisateur @endsection

@section('description') Tableau de bord utilisateur @endsection
@section('content')
    <div class="bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mx-auto text-center mb-3">
                    @include('flash::message')
                </div>
            </div>
            <div class="max-w700 m-auto">
                <form action="{{ route('dashboard.phone.create') }}" class="business-supplier bns-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-box">
                        <h4 class="title">Ajouter un téléphone</h4>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="label-title" for="name">Nom du téléphone</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" id="name" placeholder="Nom du téléphone" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="label-title" for="brand">Marque</label>
                                    <select id="brand" name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"  {{ old('category_id') == $category->id ? 'selected' :  '' }}>
                                                {{ ucfirst($category->name) }}
                                            </option>
                                        @endforeach
                                        @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="label-title" for="type">Type</label>
                                    <select id="type" name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' :  '' }}>{{ $type->name }}</option>
                                        @endforeach
                                        @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="label-title" for="cost">Prix</label>
                                    <input name="price" type="text" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror"
                                           id="cost" placeholder="Prix">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="label-title" for="stock">Stock</label>
                                    <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                           name="stock" value="{{ old('stock') }}" id="stock" placeholder="Stock">
                                    @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="label-title" for="colors">Couleurs disponibles</label>
                                    <select multiple name="colors[]" id="colors" class="form-control  @error('colors') is-invalid @enderror">
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}" {{ $color->id }}
                                                {{ old('colors') && in_array($color->id, old('colors')) ? 'selected': ''  }}>
                                                {{ $color->name }}
                                            </option>
                                        @endforeach
                                        @error('colors')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                           <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="label-title" for="details">Caractéristiques du téléphone</label>
                                    <textarea id="details" name="caracteristiques"
                                              class="form-control  @error('caracteristiques') is-invalid @enderror"
                                              placeholder="Caractéristiques du téléphone" rows="2">{{ old('caracteristiques') }}</textarea>
                                    @error('caracteristiques')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="label-title" for="description">Description du téléphone</label>
                                    <textarea name="description" class="form-control  @error('description') is-invalid @enderror"
                                              id="description" placeholder="Description du téléphone" rows="2">{{ old('description') }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="label-title">Images (5max)</label>
                                    <input
                                        type="file"
                                        multiple
                                        name="image[]"
                                        label="Cliquez au déposez pour ajouter des images de votre téléphone."
                                        help="Au maximum 5 pour un téléphone"
                                        is="drop-files"
                                    />
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-b50 text-center">
                        <button type="submit" class="btn gradient blue btn-md">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
