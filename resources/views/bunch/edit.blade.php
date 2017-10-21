@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                New bunch
            </div>
            <div class="panel-body">
                {!! Form::model($bunch, ['route' => ['bunch.update', $bunch], 'method' => 'PUT']) !!}
                @include('bunch._form')

                <div class="form-group">
                    {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
