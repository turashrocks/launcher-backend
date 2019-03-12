<!-- Expire Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expire_date', 'Expire Date:') !!}
    {!! Form::date('expire_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Pcs Assigned Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pcs_assigned', 'Pcs Assigned:') !!}
    {!! Form::number('pcs_assigned', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userSubscriptions.index') !!}" class="btn btn-default">Cancel</a>
</div>
