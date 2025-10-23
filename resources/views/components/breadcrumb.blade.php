<nav
class="p-1 my-2"
style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item" aria-current="page">
            <a class="text-decoration-none text-dark" href="{{ route('accueil') }}">
                Accueil
            </a>
        </li>
        @foreach ($links as $link)
            @if (isset($link['url']))
                <li class="breadcrumb-item">
                    <a class="text-decoration-none text-dark" href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item text-secondary{{ $loop->last ? ' active' : '' }}" aria-current="page">
                    {{ $link['label'] }}
                </li>
            @endif
        @endforeach
    </ol>
</nav>
