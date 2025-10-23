@php($dismissible = $dismissible ?? false)
@if (session('success'))
    <div
        @class([
            'alert',
            'alert-success',
            'alert-dismissible fade show' => $dismissible,
            'my-2'
        ])
        role="alert"
        >
        {{ session('success') }}
        @if($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
@endif
