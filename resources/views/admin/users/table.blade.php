<div class="table">

    <table class="table table-bordered table-striped table-hover" id="users-table">

        <thead>

        <th>User</th>
        <th>Name</th>
        <th>Email</th>
        <th>Permissions</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($users as $user)

            <tr>
                <td>
                    <?php switch ($user->is_admin) {

                        default:
                            echo "<p>Guest</p>";
                            break;

                        case 1:
                            echo "<p>Admin</p>";
                            break;

                    }

                    ?>
                </td>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                    @if($user->is_admin == 1 && $user->limited == 0)
                        Edit
                    @endif

                    @if($user->is_admin == 1 && $user->limited == 1)
                        View
                    @endif

                    @if($user->is_admin == 0)
                        Restricted
                    @endif

                </td>

                <td>

                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
                        </a>

                        @if (Auth::user()->limited == "0")
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-primary btn-sm'>
                                <i class="material-icons">mode_edit</i>
                            </a>

                            {!! Form::button(
                                '<i class="material-icons">delete</i>',
                                [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return confirm( 'Are you sure?' )"
                                ]
                            ) !!}

                        @endif

                    </div>

                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

</div>