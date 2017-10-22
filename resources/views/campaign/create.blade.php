@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                New campaign
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'campaign.store']) !!}
                @include('campaign._form')

                <div class="form-group">
                    {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
