@php($dismissible = $dismissible ?? false)
@if ($errors->any())
    <div
        @class([
            'alert',
            'alert-danger',
            'alert-dismissible fade show' => $dismissible,
            'my-2'
        ])
        role="alert">
        <ul class="mb-0 list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @if($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
@endif

@if (session('error'))
    <div
    @class([
        'alert',
        'alert-danger',
        'alert-dismissible fade show' => $dismissible,
        'my-2'
    ])
    role="alert">
        {{ session('error') }}
        @if($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
@endif
