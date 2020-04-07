@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Updating Question
        </div>

        <div class="card-block">

            {!! Form::model(
                $question,
                [
                    'route' => ['questions.update', $question->id],
                    'method' => 'patch'
                ]
            ) !!}

            <div class="row">

                @include( 'admin.questions.fields' )

            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection