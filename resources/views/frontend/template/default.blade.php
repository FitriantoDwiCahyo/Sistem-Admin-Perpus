<!DOCTYPE html>
<html lang="en">

@include('frontend.template.partials.head')

<body>
    {{-- navigation --}}
    @include('frontend.template.partials.nav')

    {{-- content     --}}
    <div class="container">
       @yield('content')
    </div>   
    

    
    @include('frontend.template.partials.js')
    @include('frontend.template.partials.toast')
</body>

</html>
