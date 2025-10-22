@extends('layouts.app')
@section('content')

<body>

    <div class="container">
        <h1 class="mb-1 font-medium text-primary">Connexion</h1>
        <x-alert.error :dismissible="true" />
        <x-alert.success />
    </div>

    <form action="{{ route('login') }}" method="POST" class="container mt-4">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <div class="mt-3">
           Vous avez toujours pas crée de compte ? <a href="{{ route('register') }}">Créer un compte</a>
        </div>
    </form>
</body>
</html>
@endsection

