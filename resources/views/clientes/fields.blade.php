<!-- Personal Field -->
<div class="row form-group col-sm-3">
    {!! Form::label('nEmpleado', 'N° empleado:') !!}
    {!! Form::number('nEmpleado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nombre', 'Nombre completo:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Apellido Paterno -->
<div class="form-group col-sm-3">
    {!! Form::label('aPaterno', 'Apellido paterno:') !!}
    {!! Form::text('aPaterno', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-3">
    {!! Form::label('aMaterno', 'Apellido materno:') !!}
    {!! Form::text('aMaterno', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Sueldoxdia Field -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldoxdia', 'Sueldo por dia:') !!}
    {!! Form::number('sueldoxdia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Sueldoxmes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldoxmes', 'Sueldo por mes:') !!}
    {!! Form::number('sueldoxmes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Canino Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
        {!! Form::hidden('canino', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('canino', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('canino', 'Canino', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-3">
    {!! Form::label('costocanino', 'Costo por unidad canino:') !!}
    {!! Form::number('costocanino', null, ['class' => 'form-control']) !!}
</div>

<!-- Sueldoquincena Field -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldoquincena', 'Sueldo quincenal:') !!}
    {!! Form::number('sueldoquincena', null, ['class' => 'form-control']) !!}
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

<!-- Ivaretenido Field -->
<div class="form-group col-sm-3">
    {!! Form::label('ivaretenido', 'IVA retenido:') !!}
    {!! Form::number('ivaretenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Totalfactura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('totalfactura', 'Total a facturar:') !!}
    {!! Form::number('totalfactura', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fechaemision Field -->
<div class="form-group col-sm-3">
    {!! Form::label('fechaemision', 'Fecha de emision:') !!}
    {!! Form::date('fechaemision', null, ['class' => 'form-control','id'=>'fechaemision']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaemision').datepicker()
    </script>
@endpush

<!-- Nombrecontacto1 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nombrecontacto1', 'Nombre de contacto 1:') !!}
    {!! Form::text('nombrecontacto1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact1 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('emailcontact1', 'Email de contacto 1:') !!}
    {!! Form::text('emailcontact1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombrecontacto2 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nombrecontacto2', 'Nombre de contacto 2:') !!}
    {!! Form::text('nombrecontacto2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact2 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('emailcontact2', 'Email de contacto 2:') !!}
    {!! Form::text('emailcontact2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-3">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Vigencia Field -->
<div class="form-group col-sm-3">
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
<div class="form-group col-sm-4">
    {!! Form::label('constancia_sf', 'Constancia de Situación fiscal:') !!}
    {!! Form::file('constancia_sf', ['class' => 'form-control file', 'accept' => 'application/pdf']) !!}
</div>

<!-- Paymentid Field -->
<div class="form-group col-sm-4">
    {!! Form::label('paymentID', 'Tipo de pago:') !!}
    {!! Form::number('paymentID', null, ['class' => 'form-control', 'required']) !!}
</div>