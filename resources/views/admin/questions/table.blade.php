<div class="table">

    <table class="table table-bordered table-striped table-hover" id="questions-table">

        <thead>

        <th>Question</th>
        <th>Active:</th>
        <th>Type:</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($questions as $question)

            <tr>

                <td>{!! $question->title !!}</td>

                <td>@if ($question->active)
                        <i class="material-icons">check_box</i>
                    @else
                        <i class="material-icons">cancel</i>
                    @endif
                </td>
                <td>
                    <?php switch ($question->question_type) {

                        case 1:
                            echo "<p>Text</p>";
                            break;

                        case 2:
                            echo "<p>Checkbox</p>";
                            break;

                        case 3:
                            echo "<p>Radio</p>";
                            break;

                    }

                    ?>
                </td>

                <td>

                    {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('questions.show', [$question->id]) !!}" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
                        </a>

                        <a href="{!! route('questions.edit', [$question->id]) !!}" class='btn btn-primary btn-sm'>
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