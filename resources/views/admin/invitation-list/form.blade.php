<div class="form-group{{ $errors->has('company_category_id') ? 'has-error' : '' }}">
    {!! Form::label('company_category_id', 'Company Category Id', ['class' => 'control-label']) !!}
    {!! Form::select(
        'company_category_id',
        $category,
        null,
        '' == 'required' ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control'],
    ) !!}
    {!! $errors->first('company_category_id', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group{{ $errors->has('company_subcategory_id') ? 'has-error' : ''}}">
    {!! Form::label('company_subcategory_id', 'Company Subcategory Id', ['class' => 'control-label']) !!}
    {!! Form::number('company_subcategory_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('company_subcategory_id', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group{{ $errors->has('company_name') ? 'has-error' : '' }}">
    {!! Form::label('company_name', 'Company Name', ['class' => 'control-label']) !!}
    {!! Form::text(
        'company_name',
        null,
        '' == 'required' ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control'],
    ) !!}
    {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text(
        'name',
        null,
        '' == 'required' ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control'],
    ) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text(
        'title',
        null,
        '' == 'required' ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control'],
    ) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('salutation') ? 'has-error' : '' }}">
    {!! Form::label('salutation', 'Salutation', ['class' => 'control-label']) !!}
    {!! Form::text(
        'salutation',
        null,
        '' == 'required' ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control'],
    ) !!}
    {!! $errors->first('salutation', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger">Cancel and Back</a>
</div>
