@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Group  App  Build
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($groupAppBuild, ['route' => ['groupAppBuilds.update', $groupAppBuild->id], 'method' => 'patch']) !!}

                        @include('group__app__builds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection