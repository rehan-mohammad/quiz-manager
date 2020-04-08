<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Id:
        </p>

        <p>
            {!! $quiz->id !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Slug:
        </p>

        <p>
            {!! $quiz->slug !!}
        </p>

        <hr>

    </div>
</div>


<div>

    <p class="font-weight-bold mb-0">
        Title:
    </p>

    <p>
        {!! $quiz->title !!}
    </p>

    <hr>

</div>

<div>

    <p class="font-weight-bold mb-0">
        Description:
    </p>

    <p>
        {!! $quiz->description !!}
    </p>

    <hr>

</div>

<div>

    <p class="font-weight-bold mb-0">
        Welcome Text:
    </p>

    <p>
        {!! $quiz->welcome_text !!}
    </p>

    <hr>

</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Admin Name:
        </p>

        <p>
            {!! $quiz->admin_name !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Active:
        </p>

        <p>
            {!! $quiz->active !!}
        </p>

        <hr>

    </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Starts At:
        </p>

        <p>
            {!! $quiz->starts_at !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Expires At:
        </p>

        <p>
            {!! $quiz->expires_at !!}
        </p>

        <hr>

    </div>

</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Created At:
        </p>

        <p>
            {!! $quiz->created_at !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Updated At:
        </p>

        <p>
            {!! $quiz->updated_at !!}
        </p>

        <hr>

    </div>
</div>

<div class="table">

    <table class="table table-bordered table-striped table-hover" id="questions-table">

        <thead>

        <th>Question</th>
        <th>Active:</th>
        <th colspan="3">
            Action
        </th>

        </thead>

        <tbody>

        @foreach($quiz->questions as $question)

            <tr>

                <td>{!! $question->title !!}</td>

                <td>@if ($question->active)
                        <i class="material-icons">check_box</i>
                    @else
                        <i class="material-icons">cancel</i>
                    @endif
                </td>

                <td>

                    {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}

                    <div class='btn-group'>

                        <a href="{!! route('questions.show', [$question->id]) !!}" target="_blank" class='btn btn-success btn-sm'>
                            <i class="material-icons">visibility</i>
                        </a>

                        @if (Auth::user()->limited == "0")
                            <a href="{!! route('questions.edit', [$question->id]) !!}" target="_blank" class='btn btn-primary btn-sm'>
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


