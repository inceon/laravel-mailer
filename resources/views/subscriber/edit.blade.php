@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit subscriber in `{{ $bunch->name }}` bunch
            </div>
            <div class="panel-body">
                {!! Form::model($subscriber, ['route' => ['subscriber.update', $subscriber, $bunch->id], 'method' => 'PUT']) !!}
                @include('subscriber._form')

                <div class="form-group">
                    {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
