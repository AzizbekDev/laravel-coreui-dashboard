@props([
    'href', 
    'color', 
    'size', 
    'block', 
    'disabled', 
    'icon', 
    'iconPosition', 
    'iconSize', 
    'iconColor', 
    'iconClass', 
    'class'])
@php
    $color = $color ?? 'primary';
    $size  = $size ?? 'md';
    $block = $block ?? false;
    $disabled = $disabled ?? false;
    $icon = $icon ?? false;
    $iconPosition = $iconPosition ?? 'left';
    $iconSize = $iconSize ?? 'md';
    $iconColor = $iconColor ?? 'white';
    $iconClass = $iconClass ?? '';
    $class = $class ?? '';
@endphp

@php
    $classes = collect([
        'btn',
        "btn-$color",
        "btn-$size",
        $block ? 'w-100' : '',
        $disabled ? 'opacity-50' : '',
        $class,
        'text-decoration-none',
    ])->filter()->implode(' ');
@endphp

<a {{ $attributes->merge(['href' => $href, 'class' => $classes, 'disabled' => $disabled ]) }}>
    @if ($icon && $iconPosition === 'left')
        <x-dynamic-icon :icon="$icon" :size="$iconSize" :color="$iconColor" :class="$iconClass" />
    @endif

    {{ $slot }}

    @if ($icon && $iconPosition === 'right')
        <x-dynamic-icon :icon="$icon" class="ml-2" size="$iconSize" color="$iconColor" class="$iconClass" />
    @endif
</a>