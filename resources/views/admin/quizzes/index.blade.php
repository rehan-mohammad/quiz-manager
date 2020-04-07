@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Quizzes&nbsp;
            <a href="{!! route('quizzes.create') !!}" class="btn btn-primary btn-sm float-md-right" title="Create new quiz">
                <i class="material-icons">note_add</i>
                &nbsp;Add new quiz
            </a>
        </div>

        <div class="card-block">

            @include( 'admin.quizzes.table' )

            

        </div>

    </div>

@endsection