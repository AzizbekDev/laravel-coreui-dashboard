@props(['value'])

<label {{ $attributes->merge(['class' => 'd-block fs-6 text-muted']) }}>
    {{ $value ?? $slot }}
</label>