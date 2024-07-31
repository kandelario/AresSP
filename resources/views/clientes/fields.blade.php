<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('nombre')
        <p class="error-message">{{ "El campo nombre es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

{{-- Razón Social --}}
<div class="form-group col-sm-4">
    {!! Form::label('razon_social', 'Razón Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('razon_social')
        <p class="error-message">{{ "El campo razón social es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-4">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('rfc')
        <p class="error-message">{{ "El campo rfc es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Nguardias Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nGuardias', 'N° de Personal:') !!}
    {!! Form::number('nGuardias', null, ['class' => 'form-control']) !!}
    @error('nGuardias')
        <p class="error-message">{{ "El campo numero de personal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('guardia_sueldo_dia', 'Costo Dia (Guardia):') !!}
    {!! Form::number('guardia_sueldo_dia', null, ['class' => 'form-control']) !!}
    @error('guardia_sueldo_dia')
        <p class="error-message">{{ "El campo sueldo de guardias por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('guardia_sueldo_mes', 'Costo Mes (Guardia):') !!}
    {!! Form::number('guardia_sueldo_mes', null, ['class' => 'form-control']) !!}
    @error('guardia_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de guardias por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Turno Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_jefe_turno', 'Jefe Turno:') !!}
    {!! Form::number('n_jefe_turno', null, ['class' => 'form-control']) !!}
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_turno_sueldo_dia', 'Costo Dia (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_dia', null, ['class' => 'form-control']) !!}
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_turno_sueldo_mes', 'Costo Mes (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_mes', null, ['class' => 'form-control']) !!}
    @error('jefe_turno_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de turno por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Servicio Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_jefe_servicio', 'N° Jefe de Servicio:') !!}
    {!! Form::number('n_jefe_servicio', null, ['class' => 'form-control']) !!}
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Serv Sueldo Dia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_serv_sueldo_dia', 'Costo Dia (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_dia', null, ['class' => 'form-control']) !!}
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de servicio por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Serv Sueldo Mes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jefe_serv_sueldo_mes', 'Costo Mes (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_mes', null, ['class' => 'form-control']) !!}
    @error('jefe_serv_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de servicio por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Monitorista Field -->
<div class="form-group col-sm-4">
    {!! Form::label('n_monitorista', 'Personal extra (otros):') !!}
    {!! Form::number('n_monitorista', null, ['class' => 'form-control']) !!}
    @error('n_monitorista')
        <p class="error-message">{{ "El campo cantidad de otros personal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxdia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('monitor_sueldoxdia', 'Costo por día (otros):') !!}
    {!! Form::number('monitor_sueldoxdia', null, ['class' => 'form-control']) !!}
    @error('monitor_sueldoxdia')
        <p class="error-message">{{ "El campo sueldo de otros personal por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxmes Field -->
<div class="form-group col-sm-4">
    {!! Form::label('monitor_sueldoxmes', 'Costo por mes (otros):') !!}
    {!! Form::number('monitor_sueldoxmes', null, ['class' => 'form-control']) !!}
    @error('monitor_sueldoxmes')
        <p class="error-message">{{ "El campo sueldo de otros personal por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Canino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('n_canino', 'N° de Caninos:') !!}
    {!! Form::number('n_canino', null, ['class' => 'form-control']) !!}
    @error('n_canino')
        <p class="error-message">{{ "El campo cantidad de caninos es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costocanino', 'Costo por canino:') !!}
    {!! Form::number('costocanino', null, ['class' => 'form-control']) !!}
    @error('costocanino')
        <p class="error-message">{{ "El campo costo de caninos es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Facturaxmes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('facturaxmes', 'Factura por mes:') !!}
    {!! Form::number('facturaxmes', null, ['class' => 'form-control']) !!}
    @error('facturaxmes')
        <p class="error-message">{{ "El campo factura por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Iva Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva', 'IVA:') !!}
    {!! Form::number('iva', null, ['class' => 'form-control']) !!}
    @error('iva')
        <p class="error-message">{{ "El campo iva es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Iva Retenido Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva_retenido', 'IVA Retenido:') !!}
    {!! Form::number('iva_retenido', null, ['class' => 'form-control']) !!}
    @error('iva_retenido')
        <p class="error-message">{{ "El campo iva retenido es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Total Factura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('total_factura', 'Total a Facturar:') !!}
    {!! Form::number('total_factura', null, ['class' => 'form-control']) !!}
    @error('total_factura')
        <p class="error-message">{{ "El campo total a facturar es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Fecha Emision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_emision', 'Fecha de Emisión:') !!}
    {!! Form::date('fecha_emision', null, ['class' => 'form-control','id'=>'fecha_emision']) !!}
    @error('fecha_emision')
        <p class="error-message">{{ "El campo fecha de emisión a facturar es requerido y no cumple con lo especificado." }}</p>
    @enderror
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
    @error('nombre_contacto1')
        <p class="error-message">{{ "El campo nombre de contacto 1 es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Email Contact1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contact1', 'Email Contacto 1:') !!}
    {!! Form::text('email_contact1', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('email_contact1')
        <p class="error-message">{{ "El campo email de contacto contacto 1 es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Nombre Contacto2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_contacto2', 'Nombre Contacto 2:') !!}
    {!! Form::text('nombre_contacto2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('nombre_contacto2')
        <p class="error-message">{{ "El campo nombre de contacto 2 es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Email Contact2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contact2', 'Email Contacto 2:') !!}
    {!! Form::text('email_contact2', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('email_contact2')
        <p class="error-message">{{ "El campo email de contacto 2 es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>



<!-- Vigencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vigencia', 'Vigencia:') !!}
    {!! Form::date('vigencia', null, ['class' => 'form-control','id'=>'vigencia']) !!}
    @error('vigencia')
        <p class="error-message">{{ "El campo vigencia es requerido y no cumple con lo especificado." }}</p>
    @enderror
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
    @error('observaciones')
        <p class="error-message">{{ "El campo observaciones es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Constancia Sf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('constancia_sf', 'Constancia de Situación Fiscal:') !!}
    {!! Form::file('constancia_sf', ['class' => 'form-control file', 'accept' => 'application/pdf']) !!}
    @error('constancia_sf')
        <p class="error-message">{{ "El campo constancia de situeción fiscal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Paymentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paymentID', 'Tipo de Pago:') !!}
    <select name="paymentID" id="paymentID" class="form-control">
        @foreach ($payment_types as $payment_type)
            <option value="{{$payment_type['id']}}">{{$payment_type['type']}}</option>
        @endforeach
    </select>
    @error('paymentID')
        <p class="error-message">{{ "El campo tipo de pago es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>