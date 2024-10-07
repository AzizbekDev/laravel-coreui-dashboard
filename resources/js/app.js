import './bootstrap';
import './config';
import './color-modes';

import Alpine from 'alpinejs';
import SimpleBar from 'simplebar';
import { displaySwalAlert, displayToastAlert } from './alerts';

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
    
    // Check for Swal data and display the alert
    if (window.swalData) {
        displaySwalAlert(window.swalData);
    }

    // Check for Toast data and display the alert
    if (window.toastData) {
        displayToastAlert(window.toastData);
    }
});

document.addEventListener('DOMContentLoaded', function () {
   
});

Alpine.start();
