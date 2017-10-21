@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit template
            </div>
            <div class="panel-body">
                {!! Form::model($template, ['route' => ['template.update', $template], 'method' => 'PUT']) !!}
                @include('template._form')

                <div class="form-group">
                    {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
