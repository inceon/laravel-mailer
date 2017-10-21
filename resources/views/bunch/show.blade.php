@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Subscribers
            {{ link_to_route('subscriber.create', 'add subscriber', [$bunch->id], ['class' => 'btn btn-info btn-xs pull-right']) }}
            {{ link_to_route('bunch.index', 'all bunches', null, ['class' => 'btn btn-info btn-xs pull-right', 'style' => 'margin-right: 5px']) }}
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th width="15%">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bunch->subscribers as $subscriber)
                    <tr>
                        <td> {{ $subscriber->f_name }} </td>
                        <td> {{ $subscriber->s_name }} </td>
                        <td> {{ $subscriber->email }} </td>
                        <td>
                            {{Form::open(['class' => 'confirm-delete', 'route' => ['subscriber.destroy', $bunch->id, $subscriber->id], 'method' => 'DELETE'])}}
                            {{ link_to_route('subscriber.show', 'info', [$bunch->id, $subscriber->id], ['class' => 'btn btn-info btn-xs']) }} |
                            {{ link_to_route('subscriber.edit', 'edit', [$bunch->id, $subscriber->id], ['class' => 'btn btn-success btn-xs']) }} |
                            {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                            {{Form::close()}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
