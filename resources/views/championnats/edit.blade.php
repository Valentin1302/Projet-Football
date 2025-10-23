@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats', 'url' => route('championnats')],
        ['label' => 'Modifier un championnat'],
    ]" />
    <x-alert.error :dismissible="true" />
    <x-alert.success />
    <div class="container">
        <h1 class="h3 mb-4">Modifier le championnat</h1>
        <x-alert.error :dismissible="true" />
        <x-alert.success />
        <form action="{{ route('championnats.update', $championnat) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du championnat</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom', $championnat->nom) }}" class="form-control @error('nom') is-invalid @enderror" required>
                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" name="pays" id="pays" value="{{ old('pays', $championnat->pays) }}" class="form-control @error('pays') is-invalid @enderror" required>
                @error('pays')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning">Enregistrer</button>
                <a href="{{ route('championnats') }}" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </div>

@endsection
