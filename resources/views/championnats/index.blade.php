@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats'],
    ]" />
    {{-- Affichage des erreurs de validation ou des messages d'erreur flash --}}
    <x-alert.error :dismissible="true" />
    {{-- Affichage du message de succès flash --}}
    <x-alert.success :dismissible="true" />
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Liste des Championnats</h1>
    <a href="{{ route('championnats.create') }}" class="btn btn-primary">Ajouter un championnat</a>
    </div>

    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Pays</th>
                <th>Créé par</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($championnats as $championnat)
            <tr>
                <td>{{ $championnat->nom }}</td>
                <td>{{ $championnat->pays }}</td>
                <td>{{ optional($championnat->user)->nom ?? '—' }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('championnats.show', $championnat) }}" class="btn btn-sm btn-outline-secondary">Voir</a>
                    <a href="{{ route('championnats.edit', $championnat) }}" class="btn btn-sm btn-outline-warning">Modifier</a>
                    <form action="{{ route('championnats.destroy', $championnat) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Aucun championnat enregistré.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection
