@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Templates
                {{ link_to_route('template.create', 'create', null, ['class' => 'btn btn-info btn-xs pull-right']) }}
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th width="15%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($templates as $template)
                        <tr>
                            <td> {{ $template->name }} </td>
                            <td>
                                {{Form::open(['class' => 'confirm-delete', 'route' => ['template.destroy', $template->id], 'method' => 'DELETE'])}}
                                {{ link_to_route('template.show', 'view', [$template->id], ['class' => 'btn btn-info btn-xs']) }} |
                                {{ link_to_route('template.edit', 'edit', [$template->id], ['class' => 'btn btn-success btn-xs']) }} |
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
