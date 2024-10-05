@props([
    'badge_color' => null, 
    'badge_info' => null, 
    'icon' => '#cil-dot-circle', 
    'href' => '#',
    'active' => false
])

@php
    $badge = ($badge_color && $badge_info) 
             ? '<span class="badge badge-sm bg-' . e($badge_color) . ' ms-auto">' . e($badge_info) . '</span>' 
             : '';
    $isActive = $active ? 'active' : '';
@endphp

<li class="nav-item">
    <a class="nav-link {{ $isActive }}" href="{{ $href }}">
        <svg class="nav-icon">
            <use xlink:href="{{ asset('icons/sprites/free.svg' . $icon) }}"></use>
        </svg> {{ $slot }}
        {!! $badge !!}
    </a>
</li>