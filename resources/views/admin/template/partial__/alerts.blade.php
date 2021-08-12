@if (session('success'))
<div class="alert alert-success" role="alert">{{session('success')}}</div>
@endif

@if (session('info'))
<div class="alert alert-info" role="alert" >{{session('info')}}</div>
@endif

@if (session('danger'))
<div class="alert alert-danger" role="alert">{{session('danger')}}</div>
@endif

@push('jsnya')
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 2000);
        });    
    </script>
@endpush