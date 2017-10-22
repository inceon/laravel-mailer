@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{Form::open(['class' => 'confirm-delete', 'route' => ['campaign.send', $campaign->id]])}}
                Campaign `{{ $campaign->name }}`
                {{ link_to_route('campaign.index', 'all campaigns', null, ['class' => 'btn btn-info btn-xs pull-right', 'style' => 'margin-left: 5px']) }}
                {{Form::button('SEND TO ALL', ['class' => 'btn btn-success btn-xs pull-right', 'type' => 'submit'])}}
                {{Form::close()}}
            </div>
            <div class="panel-body">
                @if (session()->has('data'))
                    <div class="alert alert-success">
                        {{ session('data') }}
                    </div>
                @endif
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Attribute</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Subject </td>
                            <td> {{ $campaign->name }} </td>
                        </tr>
                        <tr>
                            <td> To </td>
                            <td> {{ $subscribers }} </td>
                        </tr>
                        <tr>
                            <td> From </td>
                            <td> {{ env('MAIL_FROM_ADDRESS', 'temp@mail.ru') }} </td>
                        </tr>
                        <tr>
                            <td> Message </td>
                            <td> {!! $campaign->template->content !!} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
