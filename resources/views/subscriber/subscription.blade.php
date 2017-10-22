@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                You want unsubscribe.
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => ['subscriber.unsubscribe', $subscriber], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!!Form::label('reason', 'Why did you want to unsubscribe?') !!}
                    {!!Form::textarea('reason', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!!Form::hidden('status', 1) !!}

                <div class="form-group">
                    {!! Form::button('Unsubscribe', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
