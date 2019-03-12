@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Details
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userDetails, ['route' => ['userDetails.update', $userDetails->id], 'method' => 'patch']) !!}

                        @include('user_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection