@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Templates
{{--                {{ link_to_route('template.create', 'create', null, ['class' => 'btn btn-info btn-xs pull-right']) }}--}}
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th width="25%">Name</th>
                        <th width="55%">Description</th>
                        <th width="20%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($templates as $template)
                        <tr>
                            <td> {{ $template->name }} </td>
                            <td> {{ $template->content }} </td>
                            {{--<td>--}}
                                {{--{{Form::open(['class' => 'confirm-delete', 'route' => ['bunch.destroy', $bunch->id], 'method' => 'DELETE'])}}--}}
                                {{--{{ link_to_route('bunch.show', 'subscribers', [$bunch->id], ['class' => 'btn btn-info btn-xs']) }} |--}}
                                {{--{{ link_to_route('bunch.edit', 'edit', [$bunch->id], ['class' => 'btn btn-success btn-xs']) }} |--}}
                                {{--{{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}--}}
                                {{--{{Form::close()}}--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
