<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
@include('layout.head')

<body>
    <div class="wrapper">
        @include('layout.sidebar')
        <div class="main-panel">
            @include('layout.navbar')
            <div class="content">
                <div class="container-fluid">
                    @yield('app')
                </div>
            </div>
            @include('layout.footer')
        </div>
    </div>
    <div class="fixed-plugin">
        {{-- @include('plugin') --}}
    </div>
</body>


@include('layout.script')
@stack('javascript')


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->

</html>