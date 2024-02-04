<!-- header -->
@include('layouts.header')

<!-- sidebar -->
@include('layouts.navbar')

<!-- main -->
<div class="container mt-2">
    @yield('container')
</div>

{{-- footer --}}
@include('layouts.footer')