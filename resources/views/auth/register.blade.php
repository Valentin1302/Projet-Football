@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <h1 class="mb-1 font-medium text-primary">Inscription</h1>
        <x-alert.error :dismissible="true" />
        <x-alert.success />
    </div>
    <form action="{{ route('register.post') }}" method="POST" class="container mt-4">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
    <a href="{{ route('login') }}">Retour à la connexion</a>
    </form>
</body>
</html>

@endsection
