<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include( 'layouts.head' )
</head>
<body class="admin">


@include( 'layouts.header' )
@if (Auth::user()->is_admin == "1")
    <div class="container admin-page-container">

        @include( 'common.errors')
        @include( 'common.flash-message')


            <div class="row">

                <div class="col-md-4 col-lg-3">
                    @include('admin.sidebar')
                </div>

                <div class="col-md-7 col-lg-9">
                    @yield('content')
                </div>

            </div>

    </div>
@else
    <div class="container">

        <h2 class="page-title">Admin: Access Denied</h2>

    </div>

@endif

@yield( 'footer-top' )

@include( 'layouts.footer' )

@yield( 'footer-scripts' )


</body>
</html>