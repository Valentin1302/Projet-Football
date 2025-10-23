
<div class="bg-primary text-white py-3 px-4 mb-2 shadow-sm d-flex align-items-center justify-content-between mb-5">
    <div class="d-flex align-items-center">
        <i class="bi bi-bandaid"></i>
        <span class="fs-4 fw-bold">Projet Football</span>
    </div>
    <div>
        @auth
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            {{ Auth::user()->nom }} {{ Auth::user()->prenom }} &nbsp;
            <button type="submit" class="btn btn-outline-light">Se déconnecter</button>
        </form>
        @endauth
    </div>
</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav w-100">
        <li class="nav-item dropdown">
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="">
                        Communes
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Entités
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Exercices
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Opérations
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Paramétrages
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Sociétés
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Thématiques
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="">
                        Utilisateurs
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
