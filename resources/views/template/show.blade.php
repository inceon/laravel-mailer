@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Template `{{ $template->name }}`
                {{ link_to_route('template.index', 'all templates', null, ['class' => 'btn btn-info btn-xs pull-right']) }}
            </div>
            <div class="panel-body">
                <iframe srcdoc="{!! $template->content !!}" class="col-lg-12" style="min-height: 800px;"></iframe>
            </div>
        </div>
    </div>
@endsection
