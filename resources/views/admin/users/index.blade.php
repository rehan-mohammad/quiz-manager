@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">
            Users&nbsp;
            <a href="{!! route('users.create') !!}" class="btn btn-primary btn-sm float-md-right" title="Create new user">
                <i class="material-icons">note_add</i>
                &nbsp;Add new user
            </a>
        </div>

        <div class="card-block">

            @include( 'admin.users.table' )

            

        </div>

    </div>

@endsection