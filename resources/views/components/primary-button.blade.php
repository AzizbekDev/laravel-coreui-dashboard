<button {{ $attributes->merge([
    'type'  => 'submit', 
    'class' => 'custom-primary-button']) }}>
    {{ $slot }}
</button>