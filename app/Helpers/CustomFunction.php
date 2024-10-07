<?php

if (!function_exists('swal_message')) {
    function swal_message($type, $message)
    {
        $type = in_array($type, ['success', 'error', 'warning', 'info']) ? $type : 'info';
        
        session()->flash('swal', [
            'title' => ucfirst($type).'!',
            'text'  => __($message),
            'icon'  => $type,
            'confirmButtonText' => __('OK'),
        ]);
    }
}

if (!function_exists('toast_message')) {
    function toast_message($type, $message)
    {
        $type = in_array($type, ['success', 'error', 'warning', 'info']) ? $type : 'info';
        
        session()->flash('toast', [
            'title' => __($message),
            'icon'  => $type
        ]);
    }
}
