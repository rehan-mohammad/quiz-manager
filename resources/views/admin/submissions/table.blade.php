<div class="table">

    <table class="table table-bordered table-striped table-hover" id="submissions-table">

        <thead>

        <th>Quiz</th>
        <th>Date</th>
        <th>Ip Address</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($submissions as $submission)

            <tr>

                <td>{{ $submission->quiz->title }}</td>
                <td>{{ $submission->created_at->format('jS F Y') }}</td>
                <td>{!! $submission->ip_address !!}</td>

                <td>

                    {!! Form::open(['route' => ['submissions.destroy', $submission->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('submissions.show', [$submission->id]) !!}" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
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