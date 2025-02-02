@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Answers&nbsp;
            @if (Auth::user()->limited == "0")
                <a href="{!! route('answers.create') !!}" class="btn btn-primary btn-sm float-md-right" title="Create new answer">
                    <i class="material-icons">note_add</i>
                    &nbsp;Add new answer
                </a>
            @endif
        </div>

        <div class="card-block">

            @include( 'admin.answers.table' )



        </div>

    </div>

@endsection