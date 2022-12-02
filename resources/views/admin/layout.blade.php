<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('admin.patials.head')

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('admin.patials.header')
        @include('admin.patials.sidebar')

        @yield('content')
    </div>
    @include('admin.patials.scripts')
</body>

</html>
