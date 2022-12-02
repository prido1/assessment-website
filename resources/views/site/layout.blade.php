<!DOCTYPE html>
<html lang="en">
@include('site.partials.head')

<body class="home">

    <div class="">

        @yield('content')

        @include('site.partials.footer')
    </div>

    <button class="rounded border-0 d-flex align-items-center justify-content-center" id="s-top" onclick="topFunction()">
        <span class="arrow-up"></span>
    </button>

    @include('site.partials.scripts')
</body>

</html>
