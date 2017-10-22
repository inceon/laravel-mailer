@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit campaign
            </div>
            <div class="panel-body">
                {!! Form::model($campaign, ['route' => ['campaign.update', $campaign], 'method' => 'PUT']) !!}
                @include('campaign._form')

                <div class="form-group">
                    {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
