<div class="form-group col-sm-6 {{ $errors->has( 'title' ) ? 'has-danger' : ''}}">

    {!! Form::label('title', 'Admin Name:') !!}

    {!! Form::text('admin_name', null, ['class' => 'form-control']) !!}

    {!! $errors->first('admin_name', '<div class="form-control-feedback">:message</div>') !!}

</div>