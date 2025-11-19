@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats', 'url' => route('championnats')],
        ['label' => 'Ajouter une équipe'],
    ]" />


<h1>Ajouter une nouvelle équipe</h1>
<x-alert.error :dismissible="true" />
<x-alert.success />
<form action="{{ route('championnats.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nom" class="form-label">
            Nom de l'équipe
        </label>
                <input
                    type="text"
                    class="form-control @error('nom') is-invalid @enderror"
                    id="nom" name="nom"
                    value="{{ old('nom') }}"
                    required
                >
                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="pays" class="form-label">
            Pays
        </label>
        <input
            type="text"
            class="form-control @error('pays') is-invalid @enderror"
            id="pays" name="pays"
            value="{{ old('pays') }}"
            required
        >
        <label for="ville" class="form-label">
            Ville
        </label>
        <input
            type="text"
            class="form-control @error('ville') is-invalid @enderror"
            id="ville" name="ville"
            value="{{ old('ville') }}"
        >
        <label for="logo" class="form-label">
            Logo (URL)
        </label>
        <input
            type="text"
            class="form-control @error('logo') is-invalid @enderror"
            id="logo" name="logo"
            value="{{ old('logo') }}"
        >
        <label for="annee_creation" class="form-label">
            Année de création
        </label>
        <input
            type="text"
            class="form-control @error('annee_creation') is-invalid @enderror"
            id="annee_creation" name="annee_creation"
            value="{{ old('annee_creation') }}"
        >
        @error('pays')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter le Championnat</button>
</form>


@endsection
