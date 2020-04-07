@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Updating User
        </div>

        <div class="card-block">

            {!! Form::model(
                $user,
                [
                    'route' => ['users.update', $user->id],
                    'method' => 'patch'
                ]
            ) !!}

                <div class="row">

                    @include( 'admin.users.fields' )

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection