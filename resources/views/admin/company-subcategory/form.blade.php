<div class="form-group{{ $errors->has('company_category_id') ? 'has-error' : ''}}">
    {!! Form::label('company_category_id', 'Company Category Id', ['class' => 'control-label']) !!}
    {!! Form::number('company_category_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('company_category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('subcategory_name') ? 'has-error' : ''}}">
    {!! Form::label('subcategory_name', 'Subcategory Name', ['class' => 'control-label']) !!}
    {!! Form::text('subcategory_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('subcategory_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger">Cancel and Back</a>
</div>
