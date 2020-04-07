@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Submissions&nbsp;
        </div>

        <div class="card-block">

            @include( 'admin.submissions.table' )

        </div>

    </div>

@endsection