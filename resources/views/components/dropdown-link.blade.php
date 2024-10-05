@props([
    'icon' => '#cil-dot-circle', 
    'href' => '#',
    'onclick' => ''
])
<a class="dropdown-item" href="{{ $href }}" @if($onclick) onclick="{{ $onclick }}" @endif>
    <svg class="icon me-2">
        <use xlink:href="{{ asset('icons/sprites/free.svg' . $icon) }}"></use>
    </svg> {{ $slot }}
</a>