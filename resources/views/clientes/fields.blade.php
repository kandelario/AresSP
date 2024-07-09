<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nguardias Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nGuardias', 'N° de Guardias:') !!}
    {!! Form::number('nGuardias', 0, ['class' => 'form-control']) !!}
</div>

<!-- Guardia Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('guardia_sueldo_dia', 'Sueldo Dia (Guardia):') !!}
    {!! Form::number('guardia_sueldo_dia', 0, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Guardia Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('guardia_sueldo_mes', 'Sueldo Mes (Guardia):') !!}
    {!! Form::number('guardia_sueldo_mes', 0, ['class' => 'form-control', 'required']) !!}
</div>

<!-- N Jefe Turno Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_jefe_turno', 'Jefe Turno:') !!}
    {!! Form::number('n_jefe_turno', 0, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Turno Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_turno_sueldo_dia', 'Sueldo Dia (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_dia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Jefe Turno Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_turno_sueldo_mes', 'Sueldo Mes (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_mes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- N Jefe Servicio Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_jefe_servicio', 'N° Jefe de Servicio:') !!}
    {!! Form::number('n_jefe_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Serv Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_serv_sueldo_dia', 'Sueldo Dia (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_dia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Jefe Serv Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_serv_sueldo_mes', 'Sueldo Mes (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_mes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- N Monitorista Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_monitorista', 'Personal extra (otros):') !!}
    {!! Form::number('n_monitorista', null, ['class' => 'form-control']) !!}
</div>

<!-- Monitor Sueldoxdia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('monitor_sueldoxdia', 'Sueldo por día (otros):') !!}
    {!! Form::number('monitor_sueldoxdia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Monitor Sueldoxmes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('monitor_sueldoxmes', 'Sueldo por mes (otros):') !!}
    {!! Form::number('monitor_sueldoxmes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- N Canino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('n_canino', 'N° de Caninos:') !!}
    {!! Form::number('n_canino', null, ['class' => 'form-control']) !!}
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costocanino', 'Costo por canino:') !!}
    {!! Form::number('costocanino', null, ['class' => 'form-control']) !!}
</div>

<!-- Facturaxmes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('facturaxmes', 'Factura por mes:') !!}
    {!! Form::number('facturaxmes', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva', 'IVA:') !!}
    {!! Form::number('iva', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Iva Retenido Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva_retenido', 'IVA Retenido:') !!}
    {!! Form::number('iva_retenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Factura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('total_factura', 'Total a Facturar:') !!}
    {!! Form::number('total_factura', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fecha Emision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_emision', 'Fecha de Emisión:') !!}
    {!! Form::date('fecha_emision', null, ['class' => 'form-control','id'=>'fecha_emision']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_emision').datepicker()
    </script>
@endpush

<div class="form-group col-sm-6"></div>

<!-- Nombre Contacto1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto1', 'Nombre Contacto 1:') !!}
    {!! Form::text('nombre_contacto1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Contact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contact1', 'Email Contacto 1:') !!}
    {!! Form::text('email_contact1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombre Contacto2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto2', 'Nombre Contacto 2:') !!}
    {!! Form::text('nombre_contacto2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Contact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contact2', 'Email Contacto 2:') !!}
    {!! Form::text('email_contact2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>



<!-- Vigencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vigencia', 'Vigencia:') !!}
    {!! Form::date('vigencia', null, ['class' => 'form-control','id'=>'vigencia']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#vigencia').datepicker()
    </script>
@endpush

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Constancia Sf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('constancia_sf', 'Constancia de Situación Fiscal:') !!}
    {!! Form::file('constancia_sf', ['class' => 'form-control file', 'accept' => 'application/pdf']) !!}
</div>

<!-- Paymentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paymentID', 'Paymentid:') !!}
    {!! Form::number('paymentID', null, ['class' => 'form-control', 'required']) !!}
</div>