@if ($errors->any())
@php $allErrors = ""; @endphp
@foreach ($errors->all() as $error)
@php 
$allErrors .= '<li>' . $error .'</li>'; 
@endphp
@endforeach
<script>
    toastMixin.fire({
        animation: true,
        title: "<ul style='color:red'>{!!$allErrors!!}</ul>",
        icon: 'error',
        timer: 30000,
    });
</script>
@endif