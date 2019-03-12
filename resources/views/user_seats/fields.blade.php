<!-- Pc Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pc_uid', 'Pc Uid:') !!}
    {!! Form::text('pc_uid', null, ['class' => 'form-control']) !!}
</div>

<!-- Pc Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pc_name', 'Pc Name:') !!}
    {!! Form::text('pc_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Installation Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('installation_date', 'Installation Date:') !!}
    {!! Form::date('installation_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userSeats.index') !!}" class="btn btn-default">Cancel</a>
</div>
