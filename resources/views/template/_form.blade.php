<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!!Form::label('name', 'Name') !!}
    {!!Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    {!!Form::label('content', 'Content') !!}
    {!!Form::textarea('content', null, ['class' => 'form-control', 'id' => 'summernote', 'required' => 'required']) !!}
    @if ($errors->has('content'))
        <span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
    @endif
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>