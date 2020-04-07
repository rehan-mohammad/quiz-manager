@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Updating Answer
        </div>

        <div class="card-block">

            {!! Form::model(
                $answer,
                [
                    'route' => ['answers.update', $answer->id],
                    'method' => 'patch'
                ]
            ) !!}

            <div class="row">

                @include( 'admin.answers.fields' )

            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection