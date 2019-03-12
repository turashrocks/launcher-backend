<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Config File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('config_file', 'Config File:') !!}
    {!! Form::number('config_file', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('builds.index') !!}" class="btn btn-default">Cancel</a>
</div>
