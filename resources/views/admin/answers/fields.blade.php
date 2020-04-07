<div class="form-group col-sm-6 {{ $errors->has( 'answer' ) ? 'has-danger' : ''}}">

    {!! Form::label('answer', 'Answer:') !!}

    {!! Form::text('answer', null, ['class' => 'form-control']) !!}

    {!! $errors->first('answer', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'question_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('question_id', 'question_id:') !!}

    {!! Form::text('question_id', null, ['class' => 'form-control']) !!}

    {!! $errors->first('question_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'survey_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('quiz_id', 'quiz_id:') !!}

    {!! Form::text('quiz_id', null, ['class' => 'form-control']) !!}

        {!! $errors->first('quiz_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'answers.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>
