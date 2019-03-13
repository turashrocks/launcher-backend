@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Build
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                 <form action="{{url('addbuilds')}}" method="POST" enctype="multipart/form-data">   
                    {{csrf_field()}}

                   <!-- Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('name', 'Name:') !!}
                    <input type="text" class="form-control" name="name" required> 
                </div>

                <!-- Config File Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('config_file', 'Config File:') !!}
                    <input type="file" class="form-control" name="config_file" required> 
                </div>

                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('builds.index') !!}" class="btn btn-default">Cancel</a>
                </div>

            </form>

                </div>
            </div>
        </div>
    </div>
@endsection
