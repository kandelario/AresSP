<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Completo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    {!! Form::text('domicilio', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telefonos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefonos', 'Teléfonos:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telefono Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_contacto', 'Teléfono de Contacto:') !!}
    {!! Form::text('telefono_contacto', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha de Inicio Servicio:') !!}
    {!! Form::date('fecha_inicio_serv', null, ['class' => 'form-control date','id'=>'fecha_inicio_serv']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_inicio_serv').datepicker()
    </script>
@endpush

<!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {{-- {!! Form::hidden('enable', 1, ['class' => 'form-control']) !!} --}}
        {{-- {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!} --}}
    </div>
</div>