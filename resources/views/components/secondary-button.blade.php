<button {{ $attributes->merge([
        'type'  => 'button', 
        'class' => 'custom-secondary-button']) }}>
    {{ $slot }}
</button>