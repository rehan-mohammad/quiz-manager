@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Updating Quiz
        </div>

        <div class="card-block p-3">

            {!! Form::model(
                $quiz,
                [
                    'route' => ['quizzes.update', $quiz->id],
                    'method' => 'patch'
                ]
            ) !!}

                <div class="row">

                    @include( 'admin.quizzes.fields' )

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection