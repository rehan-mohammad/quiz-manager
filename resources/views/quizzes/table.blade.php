<div class="table">

    <table class="table table-bordered table-striped table-hover" id="quizzes-table">

        <thead>

        <th>Slug</th>
        <th>Title</th>
        <th>Description</th>
        <th>Welcome Text</th>
        <th>Admin Name</th>
        <th>Active</th>
        <th>Starts At</th>
        <th>Expires At</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($quizzes as $quiz)

            <tr>

                <td>{!! $quiz->slug !!}</td>
                <td>{!! $quiz->title !!}</td>
                <td>{!! $quiz->description !!}</td>
                <td>{!! $quiz->welcome_text !!}</td>
                <td>{!! $quiz->admin_name !!}</td>
                <td>{!! $quiz->active !!}</td>
                <td>{!! $quiz->starts_at !!}</td>
                <td>{!! $quiz->expires_at !!}</td>

                <td>

                    {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('quizzes.show', [$quiz->id]) !!}" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
                        </a>

                        <a href="{!! route('quizzes.edit', [$quiz->id]) !!}" class='btn btn-primary btn-sm'>
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

                    </div>

                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

</div>