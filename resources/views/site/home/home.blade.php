@extends('site.layout')

@section('content')
    @include('site.home.sections.header')
    @include('site.home.sections.about-us')
    @include('site.home.sections.services')
    @include('site.home.sections.pricing')
@endsection

@push('scripts')
    <script>
        $(document).on('click', 'a[href^="#"]', function(e) {
            var id = $(this).attr('href');
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }
            e.preventDefault();
            var pos = $id.offset().top;
            $('body, html').animate({
                scrollTop: pos
            }, 800, "linear");
        });
    </script>
@endpush
