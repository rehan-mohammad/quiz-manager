<div class="form-group col-sm-6 {{ $errors->has( 'user_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('user_id', 'User Id:') !!}

    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}

    {!! $errors->first('user_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'ip_address' ) ? 'has-danger' : ''}}">

    {!! Form::label('ip_address', 'Ip Address:') !!}

    {!! Form::text('ip_address', null, ['class' => 'form-control']) !!}

    {!! $errors->first('ip_address', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'quiz_id' ) ? 'has-danger' : ''}}">

    {!! Form::label('quiz_id', 'Quiz Id:') !!}

    {!! Form::number('quiz_id', null, ['class' => 'form-control']) !!}

    {!! $errors->first('quiz_id', '<div class="form-control-feedback">:message</div>') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'submissions.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>
