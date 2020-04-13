@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Quizzes&nbsp;
            @if (Auth::user()->limited == "0")
                <a href="{!! route('quizzes.create') !!}" class="btn btn-primary btn-sm float-md-right" title="Create new answer">
                    <i class="material-icons">note_add</i>
                    &nbsp;Add new Quiz
                </a>
            @endif
        </div>

        <div class="card-block">

            @include( 'admin.quizzes.table' )

            

        </div>

    </div>

@endsection