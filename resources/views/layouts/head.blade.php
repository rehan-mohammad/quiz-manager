<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('meta-description')
@yield('meta-keywords')


<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Quiz Manager') }}</title>

<!-- Styles -->
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token(), ]) !!};
</script>