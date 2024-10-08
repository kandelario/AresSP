{{-- @dd($cliente) --}}
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
<div class="form-group col-sm-3">
    {!! Form::label('nGuardias', 'N° de Personal:') !!}
    {!! Form::number('nGuardias', null, ['class' => 'form-control']) !!}
    @error('nGuardias')
        <p class="error-message">{{ "El campo numero de personal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Costo Dia Field -->
<div class="form-group col-sm-3">
    {!! Form::label('guardia_sueldo_dia', 'Costo Dia (Guardia):') !!}
    {!! Form::number('guardia_sueldo_dia', null, ['class' => 'form-control', 'step' => 'any']) !!}
    @error('guardia_sueldo_dia')
        <p class="error-message">{{ "El campo sueldo de guardias por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Costo Mes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('guardia_sueldo_mes', 'Costo Mes (Guardia):') !!}
    
    @if (isset($cliente->guardia_sueldo_mes))
        {{-- {!! Form::number('guardia_sueldo_mes', number_format($cliente->guardia_sueldo_mes, 2), ['class' => 'form-control']) !!} --}}
        @php
            $costo_guardia_mes = number_format($cliente->guardia_sueldo_mes);
        @endphp

        {!! Form::number('guardia_sueldo_mes', $cliente->guardia_sueldo_mes, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('guardia_sueldo_mes', null, ['class' => 'form-control']) !!}
    @endif
    @error('guardia_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de guardias por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_guardia', 'Sueldo Guardia:') !!}
    @if (isset($cliente->sueldo_guardia))
        {!! Form::number('sueldo_guardia', $cliente->sueldo_guardia, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('sueldo_guardia', null, ['class' => 'form-control']) !!}
    @endif
    @error('sueldo_guardia')
        <p class="error-message">{{ "El campo sueldo de guardias por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Turno Field -->
<div class="form-group col-sm-3">
    {!! Form::label('n_jefe_turno', 'Jefe Turno:') !!}
    {!! Form::number('n_jefe_turno', null, ['class' => 'form-control']) !!}
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno Costo Dia Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jefe_turno_sueldo_dia', 'Costo Dia (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_dia', null, ['class' => 'form-control']) !!}
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno costo Mes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jefe_turno_sueldo_mes', 'Costo Mes (Jefe Turno):') !!}
    {!! Form::number('jefe_turno_sueldo_mes', null, ['class' => 'form-control']) !!}
    @error('jefe_turno_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de turno por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe de Turno Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_jefe_turno', 'Sueldo Jefe de Turno:') !!}
    
    @if (isset($cliente->sueldo_jefe_turno))
        {!! Form::number('sueldo_jefe_turno', $cliente->sueldo_jefe_turno, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('sueldo_jefe_turno', null, ['class' => 'form-control']) !!}
    @endif
    @error('sueldo_jefe_turno')
        <p class="error-message">{{ "El campo sueldo de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Servicio Field -->
<div class="form-group col-sm-3">
    {!! Form::label('n_jefe_servicio', 'N° Jefe de Servicio:') !!}
    {!! Form::number('n_jefe_servicio', null, ['class' => 'form-control']) !!}
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Serv Sueldo Dia Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jefe_serv_sueldo_dia', 'Costo Dia (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_dia', null, ['class' => 'form-control']) !!}
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de servicio por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>



<!-- Jefe Serv Sueldo Mes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jefe_serv_sueldo_mes', 'Costo Mes (Jefe de Servicio):') !!}
    {!! Form::number('jefe_serv_sueldo_mes', null, ['class' => 'form-control']) !!}
    @error('jefe_serv_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de servicio por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe de Servicio Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_jefe_servicio', 'Sueldo Jefe de Servicio:') !!}
    
    @if (isset($cliente->sueldo_jefe_servicio))
        {!! Form::number('sueldo_jefe_servicio', $cliente->sueldo_jefe_servicio, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('sueldo_jefe_servicio', null, ['class' => 'form-control']) !!}
    @endif
    @error('sueldo_jefe_servicio')
        <p class="error-message">{{ "El campo sueldo de jefe de servicio es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Monitorista Field -->
<div class="form-group col-sm-3">
    {!! Form::label('n_monitorista', 'Personal extra (otros):') !!}
    {!! Form::number('n_monitorista', null, ['class' => 'form-control']) !!}
    @error('n_monitorista')
        <p class="error-message">{{ "El campo cantidad de otros personal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxdia Field -->
<div class="form-group col-sm-3">
    {!! Form::label('monitor_sueldoxdia', 'Costo por día (otros):') !!}
    {!! Form::number('monitor_sueldoxdia', null, ['class' => 'form-control']) !!}
    @error('monitor_sueldoxdia')
        <p class="error-message">{{ "El campo sueldo de otros personal por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxmes Field -->
<div class="form-group col-sm-3">
    {!! Form::label('monitor_sueldoxmes', 'Costo por mes (otros):') !!}
    {!! Form::number('monitor_sueldoxmes', null, ['class' => 'form-control']) !!}
    @error('monitor_sueldoxmes')
        <p class="error-message">{{ "El campo sueldo de otros personal por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Cargo Extra Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_p_extra', 'Sueldo Personal Extra:') !!}
    
    @if (isset($cliente->sueldo_p_extra))
        {!! Form::number('sueldo_p_extra', $cliente->sueldo_p_extra, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('sueldo_p_extra', null, ['class' => 'form-control']) !!}
    @endif
    @error('sueldo_p_extra')
        <p class="error-message">{{ "El campo sueldo de personal extra es requerido y no cumple con lo especificado." }}</p>
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

    @if (isset($cliente->fecha_emision))
        {!! Form::date('fecha_emision', substr($cliente->fecha_emision, 0, 10), ['class' => 'form-control','id'=>'vigencia']) !!}
    @else
        {!! Form::date('fecha_emision', null, ['class' => 'form-control','id'=>'vigencia']) !!}
    @endif

    @error('fecha_emision')
        <p class="error-message">{{ "El campo fecha de emisión a facturar es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

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
    @if (isset($cliente->vigencia))
        {!! Form::date('vigencia', substr($cliente->vigencia, 0, 10), ['class' => 'form-control','id'=>'vigencia']) !!}
    @else
        {!! Form::date('vigencia', null, ['class' => 'form-control','id'=>'vigencia']) !!}
    @endif
    
    @error('vigencia')
        <p class="error-message">{{ "El campo vigencia es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

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
        @if (isset($cliente->paymentID))
            @if (isset($payment_types))
                @foreach ($payment_types as $payment_type)
                    @if ($cliente->paymentID == $payment_type->id)
                        <option value="{{$payment_type['id']}}" selected>{{$payment_type['type']}}</option>
                    @else
                        <option value="{{$payment_type['id']}}">{{$payment_type['type']}}</option>
                    @endif
                @endforeach
            @else
                <option value="">No existe un tipo de pago registrado</option>
            @endif
                
        @else
            @if (isset($payment_types))
                @foreach ($payment_types as $payment_type)
                    <option value="{{$payment_type['id']}}">{{$payment_type['type']}}</option>
                @endforeach
            @else
                <option value="">No existe un tipo de pago registrado</option>
            @endif
        @endif
        
    </select>
    @error('paymentID')
        <p class="error-message">{{ "El campo tipo de pago es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>