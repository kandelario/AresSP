<div class="row form-group card-body m-0 p-0">

    <div class="col-sm-12 mb-2 text-center"><h3>Datos personales</h3></div>

    <!-- N Emp Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('n_emp', 'N Emppleado:') !!}
        {!! Form::text('n_emp', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Name Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('name', 'Nombre completo:') !!}
        {!! Form::text('name', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Domicilio Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('domicilio', 'Domicilio:') !!}
        {!! Form::text('domicilio', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Telefonos Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('telefonos', 'Teléfonos:') !!}
        {!! Form::text('telefonos', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Telefono Contacto Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('telefono_contacto', 'Teléfono Contacto:') !!}
        {!! Form::text('telefono_contacto', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Fecha Cumple Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('fecha_cumple', 'Fecha Cumpleaños:') !!}
        @if (isset($personal->fecha_cumple) && ($personal->fecha_cumple != ""))
            {!! Form::date('fecha_cumple', str_replace(' 00:00:00', '', $personal->fecha_cumple), ['class' => 'form-control text-uppercase','id'=>'fecha_cumple']) !!}
        @else
            {!! Form::date('fecha_cumple', null, ['class' => 'form-control text-uppercase','id'=>'fecha_cumple']) !!}
        @endif
        
    </div>

    <!-- Fecha Inicio Serv Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('fecha_inicio_serv', 'Fecha de Inicio de Servicio:') !!}
        @if (isset($personal->fecha_inicio_serv) && ($personal->fecha_inicio_serv != ""))
            {!! Form::date('fecha_inicio_serv', substr($personal->fecha_inicio_serv, 0, 10), ['class' => 'form-control text-uppercase','id'=>'fecha_inicio_serv']) !!}
        @else
            {!! Form::date('fecha_inicio_serv', null, ['class' => 'form-control text-uppercase','id'=>'fecha_inicio_serv']) !!}    
        @endif
        
    </div>
    
    <!-- Curp Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('curp', 'CURP:') !!}
        {!! Form::text('curp', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Rfc Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Nss Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('nss', 'NSS:') !!}
        {!! Form::text('nss', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

</div>

<div class="row form-group card-body m-0 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Documentos</h3></div>

    <!-- Solicitud Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('solicitud', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('solicitud', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('solicitud', 'Solicitud', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Check List Ingreso Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('check_list_ingreso', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('check_list_ingreso', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('check_list_ingreso', 'Check List de Ingreso', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Carta Compromiso Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('carta_compromiso', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('carta_compromiso', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('carta_compromiso', 'Carta Compromiso', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Resguardo Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('resguardo', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('resguardo', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('resguardo', 'Resguardo', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Contrato Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('contrato', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('contrato', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('contrato', 'Contrato', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Retencion Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('retencion', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('retencion', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('retencion', 'Retencion', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Renuncia Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('renuncia', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('renuncia', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('renuncia', 'Renuncia', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Actas Administrativas Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('actas_administrativas', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('actas_administrativas', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('actas_administrativas', 'Actas Administrativas', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Honorarios Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('honorarios', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('honorarios', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('honorarios', 'Honorarios', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Identificacion Oficial Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('identificacion_oficial', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('identificacion_oficial', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('identificacion_oficial', 'Identificacion Oficial', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Acta Nacimiento Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('acta_nacimiento', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('acta_nacimiento', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('acta_nacimiento', 'Acta de Nacimiento', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Curp Doc Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('curp_doc', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('curp_doc', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('curp_doc', 'CURP Doc', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Rfc Doc Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('rfc_doc', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('rfc_doc', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('rfc_doc', 'RFC Doc', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Nss Doc Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('nss_doc', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('nss_doc', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('nss_doc', 'NSS Doc', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Comprobante Domicilio Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('comprobante_domicilio', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('comprobante_domicilio', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('comprobante_domicilio', 'Comprobante de Domicilio', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Comprobante Estudios Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('comprobante_estudios', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('comprobante_estudios', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('comprobante_estudios', 'Comprobante de Estudios', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Recomendacion Doc Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('recomendacion_doc', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('recomendacion_doc', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('recomendacion_doc', 'Recomendación Doc', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Certificado Medico Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('certificado_medico', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('certificado_medico', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('certificado_medico', 'Certificado Médico', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Antecedentes No Penales Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('antecedentes_no_penales', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('antecedentes_no_penales', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('antecedentes_no_penales', 'Antecedentes No Penales', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Cartilla Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('cartilla', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('cartilla', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('cartilla', 'Cartilla', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Enable Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('enable', 'Personal Activo', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <!-- Otro Doc Field -->
    <div class="form-group col-sm-3">
        <div class="form-check">
            {!! Form::hidden('otro_doc', 0, ['class' => 'form-check-input']) !!}
            {!! Form::checkbox('otro_doc', '1', null, ['class' => 'form-check-input']) !!}
            {!! Form::label('otro_doc', 'Otro Doc.', ['class' => 'form-check-label']) !!}
        </div>
    </div>

    <div class="row form-group p-0 col-sm-12">
        <!-- Otro Doc Nombre Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('otro_doc_nombre', 'Otro Doc. Nombre:') !!}
            {!! Form::text('otro_doc_nombre', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
        </div>
        
        <!-- Recomendaciones Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
            @if (isset($personal->recomendaciones) && $personal->recomendaciones != 0)
                {!! Form::number('recomendaciones', $personal->recomendaciones, ['class' => 'form-control text-uppercase']) !!}
            @else
                {!! Form::number('recomendaciones', 0, ['class' => 'form-control text-uppercase']) !!}
            @endif
        </div>
        
        <div class="form-group col-sm-3">
            {!! Form::label('observaciones', 'Observaciones:') !!}
            @if (isset($personal->recomendaciones) && $personal->recomendaciones != "")
                {!! Form::text('observaciones', $personal->recomendaciones, ['class' => 'form-control']) !!}    
            @else
                {!! Form::text('observaciones', 0, ['class' => 'form-control']) !!}
            @endif
            
        </div>
    </div>
        

</div>

{{-- <div class="row form-group card-body m-0 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Equipo de Protección Personal y Uniforme</h3></div>

    <!-- Epp Pantalon N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_pantalon_n', 'Epp Pantalón (cantidad):') !!}
        @if (isset($personal->epp_pantalon_n))
            {!! Form::number('epp_pantalon_n', $personal->epp_pantalon_n, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_pantalon_n', 0, ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Pantalon Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_pantalon_talla', 'Epp Pantalón Talla:') !!}
        @if (isset($personal->epp_pantalon_talla))
            {!! Form::number('epp_pantalon_talla', $personal->epp_pantalon_talla, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_pantalon_talla', 'N/A', ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Camisola N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_camisola_n', 'Epp Camisola (cantidad):') !!}
        @if (isset($personal->epp_camisola_n))
            {!! Form::number('epp_camisola_n', $personal->epp_camisola_n, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_camisola_n', 0, ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Camisola Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_camisola_talla', 'Epp Camisola Talla:') !!}
        @if (isset($personal->epp_camisola_talla))
            {!! Form::number('epp_camisola_talla', $personal->epp_camisola_talla, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_camisola_talla', 'N/A', ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Gorra N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_gorra_n', 'Epp Gorra (cantidad):') !!}
        @if (isset($personal->epp_gorra_n))
            {!! Form::number('epp_gorra_n', $personal->epp_gorra_n, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_gorra_n', 0, ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Gorra Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_gorra_talla', 'Epp Gorra Talla:') !!}
        @if (isset($personal->epp_gorra_talla))
            {!! Form::number('epp_gorra_talla', $personal->epp_gorra_talla, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_gorra_talla', 'N/A', ['class' => 'form-control text-uppercase']) !!}    
        @endif
    </div>

    <!-- Epp Fornitura N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_fornitura_n', 'Epp Fornitura (cantidad):') !!}
        {!! Form::number('epp_fornitura_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Fornitura Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_fornitura_talla', 'Epp Fornitura Talla:') !!}
        {!! Form::text('epp_fornitura_talla', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Epp Gas N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_gas_n', 'Epp Gas (cantidad):') !!}
        {!! Form::number('epp_gas_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Pr24 N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_pr24_n', 'Epp Pr24 (cantidad):') !!}
        {!! Form::number('epp_pr24_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Credencial N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_credencial_n', 'Epp Credencial (cantidad):') !!}
        {!! Form::number('epp_credencial_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Chamarra N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_chamarra_n', 'Epp Chamarra (cantidad):') !!}
        {!! Form::number('epp_chamarra_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Chamarra Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_chamarra_talla', 'Epp Chamarra Talla:') !!}
        {!! Form::text('epp_chamarra_talla', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Epp Chaleco N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_chaleco_n', 'Epp Chaleco (cantidad):') !!}
        {!! Form::number('epp_chaleco_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Chaleco Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_chaleco_talla', 'Epp Chaleco Talla:') !!}
        {!! Form::text('epp_chaleco_talla', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Epp Coipa N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_coipa_n', 'Epp Coipa (cantidad):') !!}
        {!! Form::number('epp_coipa_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Guantes N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_guantes_n', 'Epp Guantes (cantidad):') !!}
        {!! Form::number('epp_guantes_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Guantes Talla Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_guantes_talla', 'Epp Guantes Talla:') !!}
        {!! Form::text('epp_guantes_talla', null, ['class' => 'form-control text-uppercase', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>

    <!-- Epp Lampara N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_lampara_n', 'Epp Lampara (cantidad):') !!}
        {!! Form::number('epp_lampara_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Cubrebocas N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_cubrebocas_n', 'Epp Cubrebocas (cantidad):') !!}
        {!! Form::number('epp_cubrebocas_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Tapones N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_tapones_n', 'Epp Tapones (cantidad):') !!}
        {!! Form::number('epp_tapones_n', null, ['class' => 'form-control text-uppercase']) !!}
    </div>

    <!-- Epp Lentes N Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('epp_lentes_n', 'Epp Lentes (cantidad):') !!}
        @if (isset($personal->epp_lentes_n))
            {!! Form::number('epp_lentes_n', $personal->epp_lentes_n, ['class' => 'form-control text-uppercase']) !!}
        @else
            {!! Form::number('epp_lentes_n', 0, ['class' => 'form-control text-uppercase']) !!}
        @endif
        
    </div>

</div> --}}