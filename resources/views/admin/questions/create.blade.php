@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Create a new Question
        </div>

        <div class="card-block">

            {!! Form::open(['route' => 'questions.store']) !!}

            <div class="row">

                @include('admin.questions.fields')

            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection