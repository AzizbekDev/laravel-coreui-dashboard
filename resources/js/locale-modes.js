(() => {
    const updateLocale = locale => {
        axios.post('/set-locale', { locale: locale }, {
            headers: {
                'Content-Type': 'application/json',
                'Retun-After-Change': window.location.href,
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            console.log(response.data);
            showActiveLocale(response.data.locale);
            window.location.href = window.location.href;
        })
        .catch(error => {
            if (axios.isCancel(error)) {
                console.error('Request canceled:', error.message);
            } else {
                console.error('Error updating locale on the server:', error);
            }
        });
    };
    const showActiveLocale = locale => {
        const btnToActive = document.querySelector(`[data-coreui-locale-value="${locale}"]`);

        for (const element of document.querySelectorAll('[data-coreui-locale-value]')) {
            element.classList.remove('active');
        }

        btnToActive.classList.add('active');
    };

    window.addEventListener('DOMContentLoaded', () => {
        for (const toggle of document.querySelectorAll('[data-coreui-locale-value]')) {
            toggle.addEventListener('click', () => {
                const locale = toggle.getAttribute('data-coreui-locale-value');
                updateLocale(locale);
            });
        }
    });
})();