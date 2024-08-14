<div class="form-group{{ $errors->has('uuid') ? 'has-error' : ''}}">
    {!! Form::label('uuid', 'Uuid', ['class' => 'control-label']) !!}
    {!! Form::text('uuid', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('uuid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('invitation_id') ? 'has-error' : ''}}">
    {!! Form::label('invitation_id', 'Invitation Id', ['class' => 'control-label']) !!}
    {!! Form::number('invitation_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('invitation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('accepted_email') ? 'has-error' : ''}}">
    {!! Form::label('accepted_email', 'Accepted Email', ['class' => 'control-label']) !!}
    {!! Form::text('accepted_email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('accepted_email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('presence_status') ? 'has-error' : ''}}">
    {!! Form::label('presence_status', 'Presence Status', ['class' => 'control-label']) !!}
    {!! Form::number('presence_status', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('presence_status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger">Cancel and Back</a>
</div>
