<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- App Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_id', 'App Id:') !!}
    {!! Form::text('app_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Build Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('build_id', 'Build Id:') !!}
    {!! Form::text('build_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('groupAppBuilds.index') !!}" class="btn btn-default">Cancel</a>
</div>
