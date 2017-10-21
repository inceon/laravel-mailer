@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Template `{{ $template->name }}`
                {{ link_to_route('template.index', 'all templates', null, ['class' => 'btn btn-info btn-xs pull-right']) }}
            </div>
            <div class="panel-body">
                {!! $template->content !!}
            </div>
        </div>
    </div>
@endsection
