@extends('layouts.admin')

@section('content')

    <div class="card text-primary card-outline-primary mb-4 text-center">

        <div class="card-block pt-2">

            <blockquote class="card-blockquote">

                <h2>
                    Admin Dashboard
                </h2>

                <p class="mb-0">
                    Welcome to the Admin Dashboard.
                </p>

            </blockquote>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

            {{--@include(
                'partials.statistic',
                [
                    'title' => 'Designs',
                    'count' => $designCount,
                    'card_class' => 'card-warning'
                ]
            )--}}

        </div>

    </div>

@endsection
