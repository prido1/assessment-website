<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content=" {{config('config.site.site_description')}}">
    <meta name="robots" content="noindex,nofollow">
    <title>  {{config('config.site.site_title')}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="{{asset('adminn/styles/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('adminn/styles/steps.css')}}" rel="stylesheet">
    <link href="{{asset('adminn/styles/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('adminn/styles/jquery.minicolors.css')}}">
    <link href="{{asset('fonts/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminn/js/summernote/summernote-bs4.min.css')}}">

    @stack('styles')

</head>