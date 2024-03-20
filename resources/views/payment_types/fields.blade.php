<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div>