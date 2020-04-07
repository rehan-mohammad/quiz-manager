@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Create a new Submission
        </div>

        <div class="card-block">

            {!! Form::open(['route' => 'submissions.store']) !!}

                <div class="row">

                    @include('admin.submissions.fields')

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection