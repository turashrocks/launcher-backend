<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Build Id -->

<div class="form-group col-sm-2">
    {!! Form::label('build_id', 'Builds:') !!}
    <p>
        @foreach ($builds as $build)
            <label><input type="checkbox" name="checked[]" value="{{$build['id']}}">&nbsp;&nbsp;{{$build['name']}}</label>
        @endforeach
    </p>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('apps.index') !!}" class="btn btn-default">Cancel</a>
</div>
