@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Seats
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userSeats, ['route' => ['userSeats.update', $userSeats->id], 'method' => 'patch']) !!}

                        @include('user_seats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection