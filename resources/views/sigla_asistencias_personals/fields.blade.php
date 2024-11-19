<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Siglas:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'minlength' => 1, 'maxlength' => 255]) !!}

    @error('name')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario ingresar unas siglas para continuar con el registro.</em></span>
    @enderror
</div>

<!-- Knowledge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('knowledge', 'Significado:') !!}
    {!! Form::text('knowledge', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('knowledge')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario ingresar unas siglas para continuar con el registro.</em></span>
    @enderror
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('active', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('active', '1', 1, ['class' => 'form-check-input']) !!}
        {!! Form::label('active', 'Active', ['class' => 'form-check-label']) !!}
        @error('active')
            <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
            <span class="text-danger"><em>Es necesario ingresar unas siglas para continuar con el registro.</em></span>
        @enderror
    </div>
</div>