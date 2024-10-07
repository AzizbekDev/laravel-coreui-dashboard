import Swal from 'sweetalert2';

export function displaySwalAlert(swalData) {
    if (!swalData) return;

    Swal.fire({
        title: swalData.title || 'Alert',
        text: swalData.text || '',
        icon: swalData.icon || 'info',
        confirmButtonText: swalData.confirmButtonText || 'OK',
        position: 'top-end',
        timer: 3000
    });
}

export function displayToastAlert(toastData) {
    if (!toastData) return;

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    Toast.fire({
        icon: toastData.icon || 'info',
        title: toastData.title || ''
    });
}
