@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Create a new User
        </div>

        <div class="card-block">

            {!! Form::open(['route' => 'users.store']) !!}

                <div class="row">

                    @include('admin.users.fields')

                </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection