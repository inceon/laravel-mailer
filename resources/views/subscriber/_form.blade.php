<div class="form-group">
    {!!Form::label('f_name', 'Name') !!}
    {!!Form::text('f_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::label('s_name', 'Surname') !!}
    {!!Form::text('s_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!!Form::label('email', 'Email') !!}
    {!!Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

{!!Form::hidden('bunch_id', $bunch->id) !!}
