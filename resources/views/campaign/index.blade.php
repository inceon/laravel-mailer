@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Campaigns
                {{ link_to_route('campaign.create', 'create', null, ['class' => 'btn btn-info btn-xs pull-right']) }}
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="20%">Name</th>
                        <th width="25%">Description</th>
                        <th width="20%">Bunch</th>
                        <th width="20%">Template</th>
                        <th width="15%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($campaigns as $campaign)
                        <tr>
                            <td> {{ $campaign->name }} </td>
                            <td> {{ $campaign->description }} </td>
                            <td> {{ $campaign->bunch->name }} </td>
                            <td> {{ $campaign->template->name }} </td>
                            <td>
                                {{--{{Form::open(['class' => 'confirm-delete', 'route' => ['bunch.destroy', $bunch->id], 'method' => 'DELETE'])}}--}}
                                {{--{{ link_to_route('bunch.show', 'subscribers', [$bunch->id], ['class' => 'btn btn-info btn-xs']) }} |--}}
                                {{--{{ link_to_route('bunch.edit', 'edit', [$bunch->id], ['class' => 'btn btn-success btn-xs']) }} |--}}
                                {{--{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}--}}
                                {{--{{Form::close()}}--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
