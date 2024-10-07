<script>
@if(session('swal'))
    window.swalData = {
        title: "{{ session('swal.title') }}",
        text: "{{ session('swal.text') }}",
        icon: "{{ session('swal.icon') }}",
        confirmButtonText: "{{ session('swal.confirmButtonText') }}"
    };
@endif
@if(session('toast'))
    window.toastData = {
        icon: "{{ session('toast.icon') }}",
        title: "{{ session('toast.title') }}"
    };
@endif
</script>