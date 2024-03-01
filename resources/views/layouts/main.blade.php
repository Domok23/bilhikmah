<!-- header -->
@include('layouts.header')

<!-- navbar -->
@include('layouts.navbar')

<!-- main -->
<div class="container">
    @yield('container')
</div>

{{-- footer --}}
@include('layouts.footer')
