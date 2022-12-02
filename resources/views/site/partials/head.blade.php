<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('config.site.site_title') }}</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            --primary: {{ config('config.site.primary_color') }};
        }

        #s-top {
            display: none;
            position: fixed;
            bottom: 25px;
            right: 35px;
            z-index: 100;
            background-color: var(--primary);
            color: white;
            cursor: pointer;
            padding: 15px;
            font-size: 18px;
        }

        #s-top i{
          font-size: 20px
        }

        #s-top:hover {
            background-color: #555;
        }
    </style>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>
