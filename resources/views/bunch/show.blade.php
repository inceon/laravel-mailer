@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Bunches
            {{ link_to_route('bunch.index', 'all', null, ['class' => 'btn btn-info btn-xs pull-right']) }}
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th width="25%">Attribute</th>
                    <th width="75%">Value</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bunch->getAttributes() as $attr => $value)
                    @if (isset($value))
                        <tr>
                            <td> {{ $attr }} </td>
                            <td> {{ $value }} </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
