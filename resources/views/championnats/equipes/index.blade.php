@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats'],
    ]" />
    <x-alert.error :dismissible="true" />

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Liste des Équipes</h1>
        <a href="{{ route('equipes.create') }}" class="btn btn-primary">Ajouter une équipe</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Ville</th>
                <th>Logo</th>
                <th>Année de création</th>
                <th>Championnat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipes as $equipe)
                <tr>
                    <td>{{ $equipe->nom }}</td>
                    <td>{{ $equipe->ville }}</td>
                    <td>
                        @if ($equipe->logo)
                            <img src="{{ asset($equipe->logo) }}" alt="{{ $equipe->nom }}" class="img-thumbnail" width="100">
                        @endif
                    </td>
                    <td>{{ $equipe->annee_creation }}</td>
                    <td>{{ $equipe->championnat->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
