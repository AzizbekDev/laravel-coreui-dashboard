@props(['icon', 'size', 'color', 'class'])

@php
    $size  = $size ?? 'md';
    $color = $color ?? 'white';
    $class = $class ?? '';
@endphp

@php
$classes = collect([
    'icon',
    "icon-$size",
    "text-$color",
    $class,
])->filter()->implode(' ');
@endphp

<svg class="{{ $classes }}">
    <use xlink:href="{{ asset('icons/sprites/free.svg'.$icon) }}"></use>
</svg>