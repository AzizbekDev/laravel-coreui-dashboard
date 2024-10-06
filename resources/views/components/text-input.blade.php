@props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'form-control border-secondary rounded'
]) !!}>