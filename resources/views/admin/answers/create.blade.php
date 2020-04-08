@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Create a new Answer
        </div>

        <div class="card-block p-3">

            {!! Form::open(['route' => 'answers.store']) !!}

            <div class="row">

                @include('admin.answers.fields')

            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection