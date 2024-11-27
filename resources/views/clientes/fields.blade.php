<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Nombre Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('nombre')
        <p class="error-message">{{ "El campo nombre es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

{{-- Razón Social --}}
<div class="form-group col-sm-3">
    {!! Form::label('razon_social', 'Razón Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('razon_social')
        <p class="error-message">{{ "El campo razón social es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-3">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
    @error('rfc')
        <p class="error-message">{{ "El campo rfc es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>


<!-- Personal Total -->
<div class="form-group col-sm-3">
    {!! Form::label('personal_total', 'Personal Total:') !!}
    @if (isset($cliente->personal_total))
        {!! Form::number('personal_total', $cliente->personal_total, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('personal_total', 0, ['class' => 'form-control']) !!}
    @endif
    
    @error('personal_total')
        <p class="error-message">{{ "El campo Personal Total es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Nguardias Field -->
<div class="form-group col-sm-2">
    {!! Form::label('nGuardias', 'N° de Guardias:') !!}
    @if (isset($cliente->nGuardias))
        {!! Form::number('nGuardias', $cliente->nGuardias, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('nGuardias', 0, ['class' => 'form-control']) !!}
    @endif
    @error('nGuardias')
        <p class="error-message">{{ "El campo número de guardias es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Costo Dia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('guardia_sueldo_dia', 'Costo Dia (Guardia):') !!}
    @if (isset($cliente->guardia_sueldo_dia))
        {!! Form::number('guardia_sueldo_dia', $cliente->guardia_sueldo_dia, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('guardia_sueldo_dia', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    
    @error('guardia_sueldo_dia')
        <p class="error-message">{{ "El campo sueldo de guardias por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Guardia Costo Mes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('guardia_sueldo_mes', 'Costo Mes (Guardia):') !!}

    @if (isset($cliente->guardia_sueldo_mes))
        {!! Form::number('guardia_sueldo_mes', $cliente->guardia_sueldo_mes, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('guardia_sueldo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    
    @error('guardia_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de guardias por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<div class="form-group col-sm-3">
    {!! Form::label('guardias_costo_mes', 'Costo Mes (Total Guardias):') !!}
    {!! Form::number('guardias_costo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
</div>

<!-- Guardia Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_guardia', 'Sueldo Mensual de Guardia:') !!}
    @if (isset($cliente->sueldo_guardia))
        {!! Form::number('sueldo_guardia', $cliente->sueldo_guardia, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('sueldo_guardia', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('sueldo_guardia')
        <p class="error-message">{{ "El campo sueldo de guardias por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Turno Field -->
<div class="form-group col-sm-2">
    {!! Form::label('n_jefe_turno', 'N° Jefe Turno:') !!}
    @if (isset($cliente->n_jefe_turno))
        {!! Form::number('n_jefe_turno', $cliente->n_jefe_turno, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('n_jefe_turno', 0, ['class' => 'form-control']) !!}
    @endif
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno Costo Dia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jefe_turno_sueldo_dia', 'Costo Dia (J. Turno):') !!}
    @if (isset($cliente->jefe_turno_sueldo_dia))
        {!! Form::number('jefe_turno_sueldo_dia', $cliente->jefe_turno_sueldo_dia, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('jefe_turno_sueldo_dia', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif

    
    @error('n_jefe_turno')
        <p class="error-message">{{ "El campo cantidad de jefe de turno por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Turno costo Mes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jefe_turno_sueldo_mes', 'Costo Mes (J. Turno):') !!}

    @if (isset($cliente->jefe_turno_sueldo_mes))
        {!! Form::number('jefe_turno_sueldo_mes', $cliente->jefe_turno_sueldo_mes, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('jefe_turno_sueldo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('jefe_turno_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de turno por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<div class="form-group col-sm-3">
    {!! Form::label('jefe_turno_costo_mes', 'Costo Mes (Total J. de Turno):') !!}
    {!! Form::number('jefe_turno_costo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
</div>

<!-- Jefe de Turno Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_jefe_turno', 'Sueldo Mensual de J. de Turno:') !!}
    
    @if (isset($cliente->sueldo_jefe_turno))
        {!! Form::number('sueldo_jefe_turno', $cliente->sueldo_jefe_turno, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('sueldo_jefe_turno', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('sueldo_jefe_turno')
        <p class="error-message">{{ "El campo sueldo de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Jefe Servicio Field -->
<div class="form-group col-sm-2">
    {!! Form::label('n_jefe_servicio', 'N° Jefe de Servicio:') !!}
    @if (isset($cliente->n_jefe_servicio))
        {!! Form::number('n_jefe_servicio', $cliente->n_jefe_servicio, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('n_jefe_servicio', 0, ['class' => 'form-control']) !!}
    @endif
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de turno es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Serv Sueldo Dia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jefe_serv_sueldo_dia', 'Costo Dia (J. de Serv.):') !!}
    @if (isset($cliente->jefe_serv_sueldo_dia))
        {!! Form::number('jefe_serv_sueldo_dia', $cliente->jefe_serv_sueldo_dia, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('jefe_serv_sueldo_dia', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('n_jefe_servicio')
        <p class="error-message">{{ "El campo cantidad de jefe de servicio por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Jefe Serv Sueldo Mes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jefe_serv_sueldo_mes', 'Costo Mes (J. de Serv.):') !!}
    @if (isset($cliente->jefe_serv_sueldo_mes))
        {!! Form::number('jefe_serv_sueldo_mes', $cliente->jefe_serv_sueldo_mes, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('jefe_serv_sueldo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('jefe_serv_sueldo_mes')
        <p class="error-message">{{ "El campo sueldo de jefe de servicio por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<div class="form-group col-sm-3">
    {!! Form::label('jefe_servicio_costo_mes', 'Costo Mes (Total J. de Serv.):') !!}
    {!! Form::number('jefe_servicio_costo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
</div>

<!-- Jefe de Servicio Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_jefe_servicio', 'Sueldo Mensual de J. de Serv.:') !!}
    
    @if (isset($cliente->sueldo_jefe_servicio))
        {!! Form::number('sueldo_jefe_servicio', $cliente->sueldo_jefe_servicio, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('sueldo_jefe_servicio', '0.00', ['class' => 'form-control']) !!}
    @endif
    @error('sueldo_jefe_servicio')
        <p class="error-message">{{ "El campo sueldo de jefe de servicio es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Monitorista Field -->
<div class="form-group col-sm-2">
    {!! Form::label('n_monitorista', 'Personal extra (otros):') !!}
    @if (isset($cliente->n_monitorista))
        {!! Form::number('n_monitorista', $cliente->n_monitorista, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('n_monitorista', 0, ['class' => 'form-control']) !!}
    @endif
    @error('n_monitorista')
        <p class="error-message">{{ "El campo cantidad de otros personal es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxdia Field -->
<div class="form-group col-sm-2">
    {!! Form::label('monitor_sueldoxdia', 'Costo por día (otros):') !!}
    @if (isset($cliente->monitor_sueldoxdia))
        {!! Form::number('monitor_sueldoxdia', $cliente->monitor_sueldoxdia, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('monitor_sueldoxdia', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('monitor_sueldoxdia')
        <p class="error-message">{{ "El campo sueldo de otros personal por día es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monitor Sueldoxmes Field -->
<div class="form-group col-sm-2">
    {!! Form::label('monitor_sueldoxmes', 'Costo por mes (otros):') !!}
    @if (isset($cliente->monitor_sueldoxmes))
        {!! Form::number('monitor_sueldoxmes', $cliente->monitor_sueldoxmes, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('monitor_sueldoxmes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('monitor_sueldoxmes')
        <p class="error-message">{{ "El campo sueldo de otros personal por mes es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<div class="form-group col-sm-3">
    {!! Form::label('monitor_costo_mes', 'Costo total por Mes (Otros):') !!}
    {!! Form::number('monitor_costo_mes', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
</div>

<!-- Cargo Extra Sueldo -->
<div class="form-group col-sm-3">
    {!! Form::label('sueldo_p_extra', 'Sueldo Mensual de Personal Extra:') !!}
    
    @if (isset($cliente->sueldo_p_extra))
        {!! Form::number('sueldo_p_extra', $cliente->sueldo_p_extra, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('sueldo_p_extra', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('sueldo_p_extra')
        <p class="error-message">{{ "El campo sueldo de personal extra es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- N Canino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('n_canino', 'N° de Caninos:') !!}
    @if (isset($cliente->n_canino))
        {!! Form::number('n_canino', $cliente->n_canino, ['class' => 'form-control']) !!}
    @else
        {!! Form::number('n_canino', 0, ['class' => 'form-control']) !!}
    @endif
    
    @error('n_canino')
        <p class="error-message">{{ "El campo cantidad de caninos es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Costocanino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costocanino', 'Costo por canino:') !!}
    @if (isset($cliente->costocanino))
        {!! Form::number('costocanino', $cliente->costocanino, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::number('costocanino', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('costocanino')
        <p class="error-message">{{ "El campo costo de caninos es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Monto a Facturar -->

<div class="form-group col-sm-3">
    {!! Form::label('monto_facturar', 'Monto a Facturar:') !!}
    @if (isset($cliente->monto_facturar))
        {!! Form::text('monto_facturar', $cliente->monto_facturar, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::text('monto_facturar', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('monto_facturar')
        <p class="error-message">{{ "El campo monto a facturar es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Iva Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva', 'IVA:') !!}
    @if (isset($cliente->iva))
        {!! Form::text('iva', $cliente->iva, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::text('iva', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('iva')
        <p class="error-message">{{ "El campo iva es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Iva Retenido Field -->
<div class="form-group col-sm-3">
    {!! Form::label('iva_retenido', 'IVA Retenido:') !!}
    @if (isset($cliente->iva_retenido))
        {!! Form::text('iva_retenido', $cliente->iva_retenido, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::text('iva_retenido', '0.00', ['class' => 'form-control', 'step' => '0.01']) !!}
    @endif
    @error('iva_retenido')
        <p class="error-message">{{ "El campo iva retenido es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Total Factura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('total_factura', 'Total a Facturar:') !!}
    @if (isset($cliente->total_factura))
        {!! Form::text('total_factura', $cliente->total_factura, ['class' => 'form-control', 'step' => '0.01']) !!}
    @else
        {!! Form::text('total_factura', '0.00', ['class' => 'form-control', 'step' => '0.01', 'disabled']) !!}
    @endif
    @error('total_factura')
        <p class="error-message">{{ "El campo total a facturar es requerido y no cumple con lo especificado." }}</p>
    @enderror
</div>

<!-- Fecha Emision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechas_facturacion', 'Fechas de Facturación:') !!}

    @if (isset($cliente->fechas_facturacion))
        {!! Form::text('fechas_facturacion', $cliente->fechas_facturacion, ['class' => 'form-control']) !!}
    @else
        {!! Form::text('fechas_facturacion', null, ['class' => 'form-control']) !!}
    @endif

    @error('fechas_facturacion')
        <p class="error-message">{{ "El campo fechas de facturación es requerido y no cumple con lo especificado." }}</p>
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

<div class="form-group col-sm-6">
    {!! Form::label('vigencia', 'Fecha de inicio:') !!}
    @if (isset($cliente->vigencia))
        {!! Form::date('vigencia', substr($cliente->vigencia, 0, 10), ['class' => 'form-control']) !!}
    @else
        {!! Form::date('vigencia', null, ['class' => 'form-control']) !!}
    @endif
    
    @error('vigencia')
        <p class="error-message">{{ "El campo Fecha de inicio es requerido y no cumple con lo especificado." }}</p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script>
    $(function(){
        var _costo_guardia_mes = 0;
        var _costo_jefe_turno_mes = 0;
        var _costo_jefe_servicio_mes = 0;
        var _costo_monitor_mes = 0;
        var _costo_canino_mes = 0;
        var monto_x_facturar = 0;
        var _iva_ = 0;
        var _sub_total = 0;
        var _total = 0;

        $("#guardia_sueldo_dia").on('keyup',function(){
            SubTotalGUardia();
            Subtotales();
            IVA();
            Total();
        });

        $("#jefe_turno_sueldo_dia").on('keyup',function(){
            SubTotalJefeTurno();
            Subtotales();
            IVA();
            Total();
        });

        $("#jefe_serv_sueldo_dia").on('keyup',function(){
            SubTotalJefeServicio();
            Subtotales();
            IVA();
            Total();
        });

        $("#monitor_sueldoxdia").on('keyup',function(){
            SubTotalMonitor();
            Subtotales();
            IVA();
            Total();
        });

        $("#costocanino").on('keyup',function(){
            _costo_canino_mes = document.getElementById('costocanino').value;
            Subtotales();
            IVA();
            Total();
        });

        function SubTotalGUardia(){
            var guardia_sueldo_mes = document.getElementById('guardia_sueldo_mes');
            var costo_diario = document.getElementById('guardia_sueldo_dia');
            _costo_guardia_mes = getOneDecimal((costo_diario.value * 30));
            _costo_guardia_mes > 0 ? guardia_sueldo_mes.value = _costo_guardia_mes : guardia_sueldo_mes.value = 0.00;
            document.getElementById('guardias_costo_mes').value = (_costo_guardia_mes * document.getElementById('nGuardias').value);
        }

        function SubTotalJefeTurno(){
            var costo_jefe_turno_mes = document.getElementById('jefe_turno_sueldo_mes');
            var costo_jefe_turno_dia = document.getElementById('jefe_turno_sueldo_dia');
            _costo_jefe_turno_mes = getOneDecimal((costo_jefe_turno_dia.value * 30));
            costo_jefe_turno_mes.value = _costo_jefe_turno_mes;
            document.getElementById('jefe_turno_costo_mes').value = (_costo_jefe_turno_mes * document.getElementById('n_jefe_turno').value);
        }

        function SubTotalJefeServicio(){
            var costo_jefe_serv_mes = document.getElementById('jefe_serv_sueldo_mes');
            var costo_jefe_serv_dia = document.getElementById('jefe_serv_sueldo_dia');
            _costo_jefe_servicio_mes = getOneDecimal((costo_jefe_serv_dia.value * 30));
            costo_jefe_serv_mes.value = _costo_jefe_servicio_mes;
            document.getElementById('jefe_servicio_costo_mes').value = (_costo_jefe_servicio_mes * document.getElementById('n_jefe_servicio').value);
        }

        function SubTotalMonitor(){
            var costo_monitor_mes = document.getElementById('monitor_sueldoxmes');
            var costo_monitor_dia = document.getElementById('monitor_sueldoxdia');
            _costo_monitor_mes = getOneDecimal((costo_monitor_dia.value * 30));
            costo_monitor_mes.value = _costo_monitor_mes;
            document.getElementById('monitor_costo_mes').value = (_costo_monitor_mes * document.getElementById('n_monitorista').value);
        }

        function Subtotales(){
            //var total_factura = document.getElementById('total_factura');
            var _n_guardias = document.getElementById('nGuardias');
            var _n_jefe_turno = document.getElementById('n_jefe_turno');
            var _n_jefe_servicio = document.getElementById('n_jefe_servicio');
            var _n_monitor = document.getElementById('n_monitorista');
            var _n_canino = document.getElementById('n_canino');

            var monto_facturar = document.getElementById('monto_facturar');
            monto_facturar.value = parseFloat(_costo_guardia_mes * _n_guardias.value) + parseFloat(_costo_jefe_turno_mes * _n_jefe_turno.value) + parseFloat(_costo_jefe_servicio_mes * _n_jefe_servicio.value) + parseFloat(_costo_monitor_mes * _n_monitor.value) + parseFloat(_costo_canino_mes * _n_canino.value);
        }

        function IVA(){
            var monto_facturar = document.getElementById('monto_facturar');
            var _iva = document.getElementById('iva');
            var sacar_iva = parseFloat(monto_facturar.value) * .16;
            _iva.value = getOneDecimal(sacar_iva);
            _iva_ = getOneDecimal(sacar_iva);
        }

        function Total(){
            var monto_facturar = document.getElementById('monto_facturar');
            var total_factura = document.getElementById('total_factura');
            _total = getOneDecimal(monto_facturar.value) + getOneDecimal(_iva_);
            total_factura.value = _total;
        }

        function getOneDecimal(num) {
           return Math.floor(num * 10) / 10;
        }

        function InitTotales(){
            SubTotalGUardia();
            SubTotalJefeTurno();
            SubTotalJefeServicio();
            SubTotalMonitor();
            Subtotales();
            IVA();
            Total();
        }

        InitTotales();
    });
</script>