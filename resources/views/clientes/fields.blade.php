<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Personal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personal', 'Personal:') !!}
    {!! Form::number('personal', null, ['class' => 'form-control']) !!}
</div>

<!-- Sueldoxdia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sueldoxdia', 'Sueldoxdia:') !!}
    {!! Form::number('sueldoxdia', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Sueldoxmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sueldoxmes', 'Sueldoxmes:') !!}
    {!! Form::number('sueldoxmes', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Canino Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('canino', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('canino', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('canino', 'Canino', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costocanino', 'Costocanino:') !!}
    {!! Form::number('costocanino', null, ['class' => 'form-control']) !!}
</div>

<!-- Sueldoquincena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sueldoquincena', 'Sueldoquincena:') !!}
    {!! Form::number('sueldoquincena', null, ['class' => 'form-control']) !!}
</div>

<!-- Facturaxmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facturaxmes', 'Facturaxmes:') !!}
    {!! Form::number('facturaxmes', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iva', 'Iva:') !!}
    {!! Form::number('iva', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Ivaretenido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ivaretenido', 'Ivaretenido:') !!}
    {!! Form::number('ivaretenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Totalfactura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('totalfactura', 'Totalfactura:') !!}
    {!! Form::number('totalfactura', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fechaemision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaemision', 'Fechaemision:') !!}
    {!! Form::text('fechaemision', null, ['class' => 'form-control','id'=>'fechaemision']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaemision').datepicker()
    </script>
@endpush

<!-- Nombrecontacto1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrecontacto1', 'Nombrecontacto1:') !!}
    {!! Form::text('nombrecontacto1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailcontact1', 'Emailcontact1:') !!}
    {!! Form::text('emailcontact1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nombrecontacto2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrecontacto2', 'Nombrecontacto2:') !!}
    {!! Form::text('nombrecontacto2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Emailcontact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailcontact2', 'Emailcontact2:') !!}
    {!! Form::text('emailcontact2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Vigencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vigencia', 'Vigencia:') !!}
    {!! Form::text('vigencia', null, ['class' => 'form-control','id'=>'vigencia']) !!}
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
    {!! Form::label('constancia_sf', 'Constancia Sf:') !!}
    {!! Form::text('constancia_sf', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Csf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csf', 'Csf:') !!}
    {!! Form::text('csf', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Paymentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paymentID', 'Paymentid:') !!}
    {!! Form::number('paymentID', null, ['class' => 'form-control', 'required']) !!}
</div>