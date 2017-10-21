@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                New template
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'template.store']) !!}
                @include('template._form')

                <div class="form-group">
                    {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
