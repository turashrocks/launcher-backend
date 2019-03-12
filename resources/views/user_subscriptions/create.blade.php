@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Subscriptions
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'userSubscriptions.store']) !!}

                        @include('user_subscriptions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
