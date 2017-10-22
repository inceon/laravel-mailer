<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!!Form::label('name', 'Name') !!}
    {!!Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('bunch_id', 'Bunch') !!}
    {!! Form::select(
            'bunch_id',
            App\Bunch::getSelectList(),
            isset($campaign) ? $campaign->bunch_id : null,
            ['class' => 'form-control']
        )
    !!}
</div>
<div class="form-group">
    {!! Form::label('template_id', 'Template') !!}
    {!! Form::select(
            'template_id',
            App\Template::getSelectList(),
            isset($campaign) ? $campaign->template_id : null,
            ['class' => 'form-control']
        )
    !!}
</div>
<div class="form-group">
    {!!Form::label('description', 'Description') !!}
    {!!Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>