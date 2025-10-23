@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats', 'url' => route('championnats')],
        ['label' => 'Ajouter un championnat'],
    ]" />


<h1>Ajouter un Nouveau Championnat</h1>
<x-alert.error :dismissible="true" />
<x-alert.success />
<form action="{{ route('championnats.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nom" class="form-label">
            Nom du Championnat
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
        @error('pays')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter le Championnat</button>
</form>


@endsection
