@if (session('toast'))
<script>
    M.toast({html: '{{session('toast')}}',displayLength:9000})
</script>
@endif