import './bootstrap';
import './config';
import './color-modes';

import Alpine from 'alpinejs';
import SimpleBar from 'simplebar';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', () => {
    // Initialize SimpleBar on elements with the class 'simplebar'
    document.querySelectorAll('.simplebar').forEach(el => {
        new SimpleBar(el);
    });
    // CoreUI initialization if needed
    // Example: Initialize a CoreUI tooltip
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-coreui-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new CoreUI.Tooltip(tooltipTriggerEl);
    });
});

Alpine.start();
