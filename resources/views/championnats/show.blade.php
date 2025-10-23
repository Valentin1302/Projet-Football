@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
    ['label' => 'Voir le Championnat'],
    ]" />
    <x-alert.error :dismissible="true" />
    <x-alert.success />
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-0">Championnat : {{ $championnat->nom }}</h1>
            <a href="{{ route('championnats') }}" class="btn btn-outline-secondary">Retour</a>
        </div>
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <p><strong>Pays :</strong> {{ $championnat->pays }}</p>
                <p><strong>Créé par :</strong> {{ optional($championnat->user)->nom ?? 'Inconnu' }}</p>
                <p class="text-muted">Créé le {{ $championnat->created_at->format('d/m/Y H:i') }} | Mis à jour le {{ $championnat->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('championnats.edit', $championnat) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('championnats.destroy', $championnat) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endsection
