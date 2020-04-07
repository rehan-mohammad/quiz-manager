<div class="form-group col-sm-6 {{ $errors->has( 'title' ) ? 'has-danger' : ''}}">

    {!! Form::label('title', 'Question:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! $errors->first('title', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'quiz_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('quiz_id', 'Quiz:') !!}

    {!! Form::select('quiz_id', $quizzes, null, ['class' => 'form-control']) !!}

    {!! $errors->first('quiz_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-12 {{ $errors->has( 'active' ) ? 'has-danger' : ''}}">

    {!! Form::label('active', 'active:') !!}

    {!! Form::checkbox('active', 1, ['class' => 'form-control']) !!}

    {!! $errors->first('active', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-12" id="options-container">

    @if(isset ($question->question_options))

        @foreach (json_decode($question->question_options) as $question_option)

            Option: <input name="question_options[]" value="{{$question_option}}" type="text"><br><br>

        @endforeach

            <button>Add Option</button>

    @else
        Option: <input name="question_options[]" type="text">
        <button>Add Option</button>
    @endif
</div>

<div class="form-group col-sm-12 {{ $errors->has( 'description' ) ? 'has-danger' : ''}}">

    {!! Form::label('description', 'description:') !!}

    {!! Form::text('description', null, ['class' => 'form-control']) !!}

    {!! $errors->first('description', '<div class="form-control-feedback">:message</div>') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'questions.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>

<script>
    $('#options-container').on('click', 'button', function (e) {
        e.preventDefault();
        $("#options-container input:last").after('<br><br>Option: <input name="question_options[]" type="text">');
        return false;
    })

</script>
