<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userSubscriptions->id !!}</p>
</div>

<!-- Expire Date Field -->
<div class="form-group">
    {!! Form::label('expire_date', 'Expire Date:') !!}
    <p>{!! $userSubscriptions->expire_date !!}</p>
</div>

<!-- Pcs Assigned Field -->
<div class="form-group">
    {!! Form::label('pcs_assigned', 'Pcs Assigned:') !!}
    <p>{!! $userSubscriptions->pcs_assigned !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $userSubscriptions->status !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $userSubscriptions->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userSubscriptions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userSubscriptions->updated_at !!}</p>
</div>

