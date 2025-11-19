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
    </div>

    <h2 class="h4 mt-5">Championnats</h2>
    @if(!empty($apiCompetitions))
        <table class="table table-bordered table-sm align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nom</th>
                    <th>Pays</th>
                    <th>Saison courante</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apiCompetitions as $c)
                <tr>
                    <td>{{ $c['name'] ?? '—' }}</td>
                    <td>{{ $c['area']['name'] ?? '—' }}</td>
                    <td>
                        @php($season = $c['currentSeason'] ?? null)
                        @if($season)
                            {{ $season['startDate'] ?? '' }} - {{ $season['endDate'] ?? '' }}
                        @else
                            —
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning" role="alert">
            Aucune donnée reçue de l'API Football Data. Vérifiez votre jeton, les limites de requêtes ou les logs.
        </div>
    @endif
@endsection
