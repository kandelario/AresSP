<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Existencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('existencia', 'Existencia:') !!}
    {!! Form::number('existencia', 1, ['class' => 'form-control', 'required']) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image', ['class' => 'form-control file', 'accept' => 'image/*']) !!}
</div>