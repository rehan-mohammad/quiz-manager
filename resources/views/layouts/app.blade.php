<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include( 'layouts.head' )
    @yield('head-content')
</head>
<body style="background-image: url({{ url('/') }}/images/bg.jpg); background-repeat: no-repeat; background-position: 50% 0; background-color: #E2EBF0;">

    @include( 'layouts.header' )

    <div class="container content-container page-content-container">

        @include( 'common.errors')
        @include( 'common.flash-message')

        @yield( 'content' )

    </div>

    @yield( 'footer-top' )

    @include( 'layouts.footer' )

    @yield( 'footer-scripts' )

</body>
</html>