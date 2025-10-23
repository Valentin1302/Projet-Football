@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h1 class="mb-4 text-center fw-bold">Bienvenue sur le portail du football</h1>
    <div class="row g-4">
        <!-- Section Stades -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <span class="display-4 text-primary mb-3">
                        <i class="bi bi-building"></i>
                    </span>
                    <h3 class="card-title">Stades</h3>
                    <p class="card-text">Découvrez les plus grands stades du monde, leurs histoires et leurs caractéristiques uniques.</p>
                    <a href="#" class="btn btn-outline-primary">Voir les stades</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <span class="display-4 text-success mb-3">
                        <i class="bi bi-trophy"></i>
                    </span>
                    <h3 class="card-title">Championnats</h3>
                    <p class="card-text">Explorez les différents championnats nationaux et internationaux, leurs palmarès et leurs équipes phares.</p>
                    <a href="{{ route('championnats') }}" class="btn btn-outline-success">Voir les championnats</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <span class="display-4 text-warning mb-3">
                        <i class="bi bi-star"></i>
                    </span>
                    <h3 class="card-title">Palmarès</h3>
                    <p class="card-text">Consultez les palmarès des clubs, des joueurs et des compétitions majeures du football.</p>
                    <a href="#" class="btn btn-outline-warning">Voir le palmarès</a>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection
