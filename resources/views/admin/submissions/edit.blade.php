@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Updating Submission
        </div>

        <div class="card-block p-3">

            {!! Form::model(
                $submission,
                [
                    'route' => ['submissions.update', $submission->id],
                    'method' => 'patch'
                ]
            ) !!}

                <div class="row">

                    @include( 'admin.submissions.fields' )

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection