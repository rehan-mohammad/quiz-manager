@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Users&nbsp;
            @if (Auth::user()->limited == "0")
                <a href="{!! route('users.create') !!}" class="btn btn-primary btn-sm float-md-right" title="Create new answer">
                    <i class="material-icons">note_add</i>
                    &nbsp;Add new User
                </a>
            @endif
        </div>

        <div class="card-block">

            @include( 'admin.users.table' )

            

        </div>

    </div>

@endsection