@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Create a new Quiz
        </div>

        <div class="card-block p-3">

            {!! Form::open(['route' => 'quizzes.store']) !!}

                <div class="row">

                    @include('admin.quizzes.fields')

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection