@if(session()->has('alertJS'))
    <script>
        swal({
            title: "{{ session('alertJS.title') }}",
            text: "{{ session('alertJS.message') }}",
            icon: "{{ session('alertJS.type') }}",
            button: false,
            timer: 2000,
        });
    </script>
@endif