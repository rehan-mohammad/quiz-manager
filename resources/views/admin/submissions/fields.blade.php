<div class="form-group col-sm-6 {{ $errors->has( 'user_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('user_id', 'User Id:') !!}
    {!! $submission->user->name !!} ({!! $submission->user->email !!})

    {!! Form::number('user_id', null, ['class' => 'form-control d-none']) !!}

    {!! $errors->first('user_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'ip_address' ) ? 'has-danger' : ''}}">

    {!! Form::label('ip_address', 'Ip Address:') !!}
    {!! $submission->ip_address !!}

    {!! Form::text('ip_address', null, ['class' => 'form-control d-none']) !!}

    {!! $errors->first('ip_address', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'quiz_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('quiz_id', 'Quiz Id:') !!}

    {!! $submission->quiz->title !!}

    {!! Form::number('quiz_id', null, ['class' => 'form-control d-none']) !!}

    {!! $errors->first('quiz_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="table">

    <table class="table table-bordered table-striped table-hover" id="submissions-table">

        <thead>

        <th>Question</th>
        <th>Answer</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($submission->answers as $answer)

            <tr>

                <td>{{ $answer->question_id }}</td>
                <td>{{ $answer->answer }}</td>

                <td>

                    {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

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

                    </div>

                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'submissions.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>
