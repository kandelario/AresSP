<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre', 'Nombre del cliente:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Personal Field -->
<div class="form-group col-sm-2">
    {!! Form::label('personal', 'Número de Personal Solicitado:') !!}
    {!! Form::number('personal', null, ['class' => 'form-control']) !!}
</div>

<!-- Sueldoxdia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('sueldoxdia', 'Sueldo por día:') !!}
    {!! Form::number('sueldoxdia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Sueldoxmes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('sueldoxmes', 'Sueldo por mes:') !!}
    {!! Form::number('sueldoxmes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Canino Field -->
<div class="form-group col-sm-2">
    <div class="form-check">
        {!! Form::hidden('canino', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('canino', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('canino', '¿Necesita Canino?', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-2">
    {!! Form::label('costocanino', 'Costo por Canino:') !!}
    {!! Form::number('costocanino', null, ['class' => 'form-control']) !!}
</div>

<!-- Sueldoquincena Field -->
<div class="form-group col-sm-2">
    {!! Form::label('sueldoquincena', 'Sueldo Quincenal:') !!}
    {!! Form::number('sueldoquincena', null, ['class' => 'form-control']) !!}
</div>

<!-- Facturaxmes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('facturaxmes', 'Factura por Mes:') !!}
    {!! Form::number('facturaxmes', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva Field -->
<div class="form-group col-sm-1">
    {!! Form::label('iva', 'IVA:') !!}
    {!! Form::number('iva', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Ivaretenido Field -->
<div class="form-group col-sm-1">
    {!! Form::label('ivaretenido', 'IVA Retenido:') !!}
    {!! Form::number('ivaretenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Totalfactura Field -->
<div class="form-group col-sm-1">
    {!! Form::label('totalfactura', 'Total a facturar:') !!}
    {!! Form::number('totalfactura', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fechaemision Field -->
<div class="form-group col-sm-2">
    {!! Form::label('fechaemision', 'Fecha de emision:') !!}
    {!! Form::date('fechaemision', null, ['class' => 'form-control','id'=>'fechaemision']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaemision').datepicker()
    </script>
@endpush

<!-- Payment Type Field -->
<div class="form-group col-sm-1">
    {!! Form::label('payment_type', 'Tipo de Pago:') !!}
    {!! Form::text('payment_type', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombrecontacto1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrecontacto1', 'Nombre de contacto 1:') !!}
    {!! Form::text('nombrecontacto1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailcontact1', 'Correo de contacto 1:') !!}
    {!! Form::text('emailcontact1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombrecontacto2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrecontacto2', 'Nombre de contacto 2:') !!}
    {!! Form::text('nombrecontacto2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailcontact2', 'Correo de contacto 2:') !!}
    {!! Form::text('emailcontact2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-2">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Vigencia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('vigencia', 'Vigencia:') !!}
    {!! Form::date('vigencia', null, ['class' => 'form-control','id'=>'vigencia']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#vigencia').datepicker()
    </script>
@endpush

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Imagen Oficial:') !!}
    {!! Form::file('logo', ['class' => 'form-control', 'accept' => 'image/*']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>



{{-- <!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}