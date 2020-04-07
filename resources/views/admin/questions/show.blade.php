@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">

            Question

            {!! Form::open(
            [
                'route' => ['questions.destroy',
                $question->id],
                'method' => 'delete',
                'class' => 'float-md-right'
            ]) !!}

            {!! Form::button(
                '<i class="material-icons">delete</i>',
                [
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-sm',
                    'onclick' => "return confirm( 'Are you sure?' )"
                ]
            ) !!}

            {!! Form::close() !!}

            <a href="{!! route('questions.edit', [$question->id]) !!}" class='btn btn-primary btn-sm mr-1 float-md-right'>
                <i class="material-icons">mode_edit</i>
                &nbsp;Edit Question
            </a>

        </div>

        <div class="card-block">

            @include( 'admin.questions.show_fields' )

            <div class="form-group">

                <a href="{!! route( 'questions.index' ) !!}" class="btn btn-default">
                    Back
                </a>

            </div>

        </div>

    </div>

@endsection
