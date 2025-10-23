@extends('layouts.app')
@section('content')
    <x-breadcrumb :links="[
        ['label' => 'Championnats'],
    ]" />
    {{-- Affichage des erreurs de validation ou des messages d'erreur flash --}}
    <x-alert.error :dismissible="true" />
    {{-- Affichage du message de succès flash --}}

    <h1>Liste des équipes</h1>
@endsection
