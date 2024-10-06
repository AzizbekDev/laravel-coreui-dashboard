<button {{ $attributes->merge([
    'type'  => 'submit', 
    'class' => 'custom-danger-button'
    ]) }}>
    {{ $slot }}
</button>