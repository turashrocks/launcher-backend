<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- App Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('app_id', 'App Id:') !!}
    {!! Form::text('app_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Build Id -->

<div class="form-group col-sm-2">
    {!! Form::label('app_id', 'App Name:') !!}
    <p>
        @foreach ($apps as $app)
            <label><input type="checkbox" name="checked[]" value="{{$app['id']}}">&nbsp;&nbsp;{{$app['name']}}</label>
        @endforeach
    </p>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('groups.index') !!}" class="btn btn-default">Cancel</a>
</div>
