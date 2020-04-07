<div class="form-group col-sm-6 {{ $errors->has( 'name' ) ? 'has-danger' : ''}}">

    {!! Form::label('name', 'Name:') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

    {!! $errors->first('name', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'email' ) ? 'has-danger' : ''}}">

    {!! Form::label('email', 'Email:') !!}

    {!! Form::email('email', null, ['class' => 'form-control']) !!}

    {!! $errors->first('email', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'password' ) ? 'has-danger' : ''}}">

    {!! Form::label('password', 'Password:') !!}

    {!! Form::password('password', ['class' => 'form-control']) !!}

    {!! $errors->first('password', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'is_admin' ) ? 'has-danger' : ''}}">

    {!! Form::label('is_admin', 'Is Admin:') !!}

    {!! Form::select('is_admin', ["1"=>"Yes", "0"=>"No"] , null, ['class' => 'form-control']) !!}

    {!! $errors->first('is_admin', '<div class="form-control-feedback">:message</div>') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'users.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>
