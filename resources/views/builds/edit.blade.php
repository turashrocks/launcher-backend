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
                   {!! Form::model($build, ['route' => ['builds.update', $build->id], 'method' => 'patch']) !!}

                        @include('builds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection