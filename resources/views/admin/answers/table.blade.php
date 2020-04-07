<div class="table">

    <table class="table table-bordered table-striped table-hover" id="answers-table">

        <thead>

        <th>Answer</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($answers as $answer)

            <tr>

                <td>{!! $answer->answer !!}</td>

                <td>

                    {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('answers.show', [$answer->id]) !!}" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
                        </a>

                        @if (Auth::user()->limited == "0")
                            <a href="{!! route('answers.edit', [$answer->id]) !!}" class='btn btn-primary btn-sm'>
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