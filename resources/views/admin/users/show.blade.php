@extends('layouts.admin')

@section('content')

    <div class="card">

        <div class="card-header">

            User

            {!! Form::open(
            [
                'route' => ['users.destroy',
                $user->id],
                'method' => 'delete',
                'class' => 'float-md-right'
            ]) !!}

                {!! Form::button(
                    '<i class="material-icons">delete</i>',
                    [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-sm',
                        'onclick' => "return confirm( 'Are you sure?' )"
                    ]
                ) !!}

            {!! Form::close() !!}

            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-primary btn-sm mr-1 float-md-right'>
                <i class="material-icons">mode_edit</i>
                &nbsp;Edit User
            </a>

        </div>

        <div class="card-block p-3">

            @include( 'admin.users.show_fields' )

            <div class="form-group">

               <a href="{!! route( 'users.index' ) !!}" class="btn btn-default">
                   Back
               </a>

            </div>

        </div>

    </div>

@endsection
