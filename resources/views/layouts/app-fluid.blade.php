<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include( 'layouts.head' )
</head>
<body>

    @include( 'layouts.header' )

    <div class="container-fluid content-container page-content-container">

        @include( 'common.errors')
        @include( 'common.flash-message')

        @yield('content')

    </div>

    @yield( 'footer-top' )

    @include( 'layouts.footer' )

    @yield( 'footer-scripts' )

</body>
</html>