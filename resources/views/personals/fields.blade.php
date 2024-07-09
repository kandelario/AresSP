<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Completo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control text-uppercase', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    {!! Form::text('domicilio', null, ['class' => 'form-control text-uppercase', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telefonos Field -->
<div class="form-group col-sm-4">
    {!! Form::label('telefonos', 'Teléfonos:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telefono Contacto Field -->
<div class="form-group col-sm-4">
    {!! Form::label('telefono_contacto', 'Teléfono Contacto:') !!}
    {!! Form::text('telefono_contacto', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Fecha Cumple Field -->
<div class="form-group col-sm-6">
    {{-- @php
        $str = $personal->fecha_cumple;
        $var = str_replace("00:00:00", "", $str);
        $personal->fecha_cumple = $var;
    @endphp --}}
        
    {!! Form::label('fecha_cumple', 'Fecha de Cumpleaños:') !!}
    {!! Form::text('fecha_cumple', null, ['class' => 'form-control']) !!}
    {{-- {{
        $personal->fecha_cumple
    }} --}}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_cumple').datepicker()
    </script>
@endpush

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha de Inicio de Servicio:') !!}
    {!! Form::date('fecha_inicio_serv', null, ['class' => 'form-control']) !!}
    {{-- {{
        $personal->fecha_inicio_serv
    }} --}}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_inicio_serv').datepicker()
    </script>
@endpush

<!-- Solicitud Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('solicitud', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('solicitud', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('solicitud', 'Solicitud', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Check List Ingreso Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('check_list_ingreso', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('check_list_ingreso', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('check_list_ingreso', 'CheckList de Ingreso', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Carta Compromiso Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('carta_compromiso', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('carta_compromiso', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('carta_compromiso', 'Carta Compromiso', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Resguardo Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('resguardo', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('resguardo', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('resguardo', 'Resguardo', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Contrato Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('contrato', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('contrato', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('contrato', 'Contrato', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Retencion Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('retencion', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('retencion', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('retencion', 'Retención', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Renuncia Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('renuncia', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('renuncia', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('renuncia', 'Renuncia', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Actas Administrativas Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('actas_administrativas', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('actas_administrativas', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('actas_administrativas', 'Actas Administrativas', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Honorarios Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('honorarios', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('honorarios', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('honorarios', 'Honorarios', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Identificacion Oficial Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('identificacion_oficial', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('identificacion_oficial', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('identificacion_oficial', 'Identificacion Oficial', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Acta Nacimiento Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('acta_nacimiento', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('acta_nacimiento', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('acta_nacimiento', 'Acta de Nacimiento', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Curp Doc Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('curp_doc', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('curp_doc', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('curp_doc', 'CURP Doc.', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Comprobante Domicilio Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('comprobante_domicilio', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('comprobante_domicilio', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('comprobante_domicilio', 'Comprobante de Domicilio', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Comprobante Estudios Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('comprobante_estudios', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('comprobante_estudios', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('comprobante_estudios', 'Comprobante de Estudios', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Recomendación Doc Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('recomendacion_doc', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('recomendacion_doc', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('recomendacion_doc', 'Recomendación Doc.', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Certificado Medico Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('certificado_medico', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('certificado_medico', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('certificado_medico', 'Certificado Medico', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Antecedentes No Penales Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('antecedentes_no_penales', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('antecedentes_no_penales', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('antecedentes_no_penales', 'Antecedentes no Penales', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Cartilla Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('cartilla', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('cartilla', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('cartilla', 'Cartilla', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Rfc Doc Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('rfc_doc', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('rfc_doc', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('rfc_doc', 'RFC Doc.', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Nss Doc Field -->
<div class="form-group col-sm-4">
    <div class="form-check">
        {{-- {!! Form::hidden('nss_doc', 0, ['class' => 'form-check-input']) !!} --}}
        {!! Form::checkbox('nss_doc', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('nss_doc', 'NSS Doc.', ['class' => 'form-check-label']) !!}
    </div>
</div>

<div class="form-group col-sm-12 row">
    <!-- Curp Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('curp', 'CURP:') !!}
        {!! Form::text('curp', null, ['class' => 'form-control text-uppercase', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Recomendaciones Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('recomendaciones', 'Recomendaciones Entregadas:') !!}
        {!! Form::number('recomendaciones', null, ['class' => 'form-control', 'required']) !!}
        {{-- {!! Form::text('recomendaciones', null, ['class' => 'form-control', 'required']) !!} --}}
    </div>

    <!-- Rfc Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc', null, ['class' => 'form-control text-uppercase', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Nss Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('nss', 'NSS:') !!}
        {!! Form::text('nss', null, ['class' => 'form-control text-uppercase', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>
</div>




<!-- Enable Field -->
{{-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}