<div class="form-group col-sm-6 {{ $errors->has( 'slug' ) ? 'has-danger' : ''}}">

    {!! Form::label('slug', 'Slug:') !!}

    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

    {!! $errors->first('slug', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'title' ) ? 'has-danger' : ''}}">

    {!! Form::label('title', 'Title:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! $errors->first('title', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'description' ) ? 'has-danger' : ''}}">

    {!! Form::label('description', 'Description:') !!}

    {!! Form::text('description', null, ['class' => 'form-control']) !!}

    {!! $errors->first('description', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'welcome_text' ) ? 'has-danger' : ''}}">

    {!! Form::label('welcome_text', 'Welcome Text:') !!}

    {!! Form::text('welcome_text', null, ['class' => 'form-control']) !!}

    {!! $errors->first('welcome_text', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'admin_name' ) ? 'has-danger' : ''}}">

    {!! Form::label('admin_name', 'Admin Name:') !!}

    {!! Form::text('admin_name', null, ['class' => 'form-control']) !!}

    {!! $errors->first('admin_name', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'starts_at' ) ? 'has-danger' : ''}}">

    {!! Form::label('starts_at', 'Starts At:') !!}

    {!! Form::date('starts_at', null, ['class' => 'form-control']) !!}

    {!! $errors->first('starts_at', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'expires_at' ) ? 'has-danger' : ''}}">

    {!! Form::label('expires_at', 'Expires At:') !!}

    {!! Form::date('expires_at', null, ['class' => 'form-control']) !!}

    {!! $errors->first('expires_at', '<div class="form-control-feedback">:message</div>') !!}

</div>

<div class="form-group col-sm-6 {{ $errors->has( 'active' ) ? 'has-danger' : ''}}">

    {!! Form::label('active', 'active:') !!}

    {!! Form::checkbox('active', 1, ['class' => 'form-control']) !!}

    {!! $errors->first('active', '<div class="form-control-feedback">:message</div>') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

    <a href="{!! route( 'quizzes.index' ) !!}" class="btn btn-default">
        Cancel
    </a>

</div>
