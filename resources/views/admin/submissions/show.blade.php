@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">

            {!! $submission->quiz->title !!}

        </div>

        <div class="card-block">

            @include( 'admin.submissions.show_fields' )

            <div class="form-group">

               <a href="{!! route( 'submissions.index' ) !!}" class="btn btn-default">
                   Back
               </a>

            </div>

        </div>

    </div>

@endsection
