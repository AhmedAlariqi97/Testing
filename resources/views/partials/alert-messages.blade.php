<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const rootElement = document.documentElement;
    var direction = document.querySelector(':root').dir;
    var toastPosition = 'bottom-right'
    var lang = '{{ App::getLocale() }}';

    if (lang == 'ar') {
        toastPosition = "bottom-left";
    }
    var toastMixin = Swal.mixin({
        toast: true,
        icon: 'success',
        title: 'General Title',
        animation: false,
        position: toastPosition,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
</script>
@if ($message = session('success'))
    <script>
        toastMixin.fire({
            animation: true,
            title: "{!! $message !!}"
        });
    </script>
@endif

@if ($message = session('error'))
    <script>
        toastMixin.fire({
            animation: true,
            title: "<span  style='color:red' > {!! $message !!} </span>",
            icon: 'error'
        });
    </script>
@endif
