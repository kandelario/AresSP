<div class="row form-group card-body m-0 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Datos personales</h3></div>

    <!-- N Emp Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('n_emp', 'N° Emp:') !!}
        <p>{{ $personal->n_emp }}</p>
    </div>

    <!-- Name Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('name', 'Nombre:') !!}
        <p>{{ $personal->name }}</p>
    </div>

    <!-- Domicilio Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('domicilio', 'Domicilio:') !!}
        <p>{{ $personal->domicilio }}</p>
    </div>

    <!-- Telefonos Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('telefonos', 'Teléfonos:') !!}
        <p>{{ $personal->telefonos }}</p>
    </div>

    <!-- Telefono Contacto Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('telefono_contacto', 'Teléfono Contacto:') !!}
        <p>{{ $personal->telefono_contacto }}</p>
    </div>

    <!-- Email Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $personal->email }}</p>
    </div>

    <!-- Fecha Cumple Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('fecha_cumple', 'Fecha Cumpleaños:') !!}
        <p>{{ substr($personal->fecha_cumple, 0, 10) }}</p>
    </div>

    <!-- Fecha Inicio Serv Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Servicio:') !!}
        <p>{{ substr($personal->fecha_inicio_serv, 0, 10) }}</p>
    </div>
</div>

<div class="row form-group card-body m-0 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Documentos</h3></div>

    <!-- Solicitud Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('solicitud', 'Solicitud:') !!}
        <p>{{ $personal->solicitud }}</p>
    </div>

    <!-- Check List Ingreso Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('check_list_ingreso', 'Check List Ingreso:') !!}
        <p>{{ $personal->check_list_ingreso }}</p>
    </div>

    <!-- Carta Compromiso Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('carta_compromiso', 'Carta Compromiso:') !!}
        <p>{{ $personal->carta_compromiso }}</p>
    </div>

    <!-- Resguardo Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('resguardo', 'Resguardo:') !!}
        <p>{{ $personal->resguardo }}</p>
    </div>

    <!-- Contrato Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('contrato', 'Contrato:') !!}
        <p>{{ $personal->contrato }}</p>
    </div>

    <!-- Retencion Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('retencion', 'Retencion:') !!}
        <p>{{ $personal->retencion }}</p>
    </div>

    <!-- Renuncia Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('renuncia', 'Renuncia:') !!}
        <p>{{ $personal->renuncia }}</p>
    </div>

    <!-- Actas Administrativas Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('actas_administrativas', 'Actas Administrativas:') !!}
        <p>{{ $personal->actas_administrativas }}</p>
    </div>

    <!-- Honorarios Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('honorarios', 'Honorarios:') !!}
        <p>{{ $personal->honorarios }}</p>
    </div>

    <!-- Identificacion Oficial Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('identificacion_oficial', 'Identificacion Oficial:') !!}
        <p>{{ $personal->identificacion_oficial }}</p>
    </div>

    <!-- Acta Nacimiento Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('acta_nacimiento', 'Acta Nacimiento:') !!}
        <p>{{ $personal->acta_nacimiento }}</p>
    </div>

    <!-- Curp Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('curp', 'Curp:') !!}
        <p>{{ $personal->curp }}</p>
    </div>

    <!-- Curp Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('curp_doc', 'Curp Doc:') !!}
        <p>{{ $personal->curp_doc }}</p>
    </div>

    <!-- Rfc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('rfc', 'Rfc:') !!}
        <p>{{ $personal->rfc }}</p>
    </div>

    <!-- Rfc Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('rfc_doc', 'Rfc Doc:') !!}
        <p>{{ $personal->rfc_doc }}</p>
    </div>

    <!-- Nss Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('nss', 'Nss:') !!}
        <p>{{ $personal->nss }}</p>
    </div>

    <!-- Nss Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('nss_doc', 'Nss Doc:') !!}
        <p>{{ $personal->nss_doc }}</p>
    </div>

    <!-- Comprobante Domicilio Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('comprobante_domicilio', 'Comprobante Domicilio:') !!}
        <p>{{ $personal->comprobante_domicilio }}</p>
    </div>

    <!-- Comprobante Estudios Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('comprobante_estudios', 'Comprobante Estudios:') !!}
        <p>{{ $personal->comprobante_estudios }}</p>
    </div>

    <!-- Recomendaciones Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
        <p>{{ $personal->recomendaciones }}</p>
    </div>
</div>

<div class="row form-group card-body m-0 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Equipo de Protección Personal y Uniforme</h3></div>

    <!-- Recomendacion Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('recomendacion_doc', 'Recomendacion Doc:') !!}
        <p>{{ $personal->recomendacion_doc }}</p>
    </div>

    <!-- Certificado Medico Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('certificado_medico', 'Certificado Medico:') !!}
        <p>{{ $personal->certificado_medico }}</p>
    </div>

    <!-- Antecedentes No Penales Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('antecedentes_no_penales', 'Antecedentes No Penales:') !!}
        <p>{{ $personal->antecedentes_no_penales }}</p>
    </div>

    <!-- Cartilla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('cartilla', 'Cartilla:') !!}
        <p>{{ $personal->cartilla }}</p>
    </div>

    <!-- Enable Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('enable', 'Enable:') !!}
        <p>{{ $personal->enable }}</p>
    </div>

    <!-- Otro Doc Nombre Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('otro_doc_nombre', 'Otro Doc Nombre:') !!}
        <p>{{ $personal->otro_doc_nombre }}</p>
    </div>

    <!-- Otro Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('otro_doc', 'Otro Doc:') !!}
        <p>{{ $personal->otro_doc }}</p>
    </div>

    <!-- Epp Pantalon N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pantalon_n', 'Epp Pantalon N:') !!}
        <p>{{ $personal->epp_pantalon_n }}</p>
    </div>

    <!-- Epp Pantalon Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pantalon_talla', 'Epp Pantalon Talla:') !!}
        <p>{{ $personal->epp_pantalon_talla }}</p>
    </div>

    <!-- Epp Camisola N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_camisola_n', 'Epp Camisola N:') !!}
        <p>{{ $personal->epp_camisola_n }}</p>
    </div>

    <!-- Epp Camisola Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_camisola_talla', 'Epp Camisola Talla:') !!}
        <p>{{ $personal->epp_camisola_talla }}</p>
    </div>

    <!-- Epp Gorra N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gorra_n', 'Epp Gorra N:') !!}
        <p>{{ $personal->epp_gorra_n }}</p>
    </div>

    <!-- Epp Gorra Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gorra_talla', 'Epp Gorra Talla:') !!}
        <p>{{ $personal->epp_gorra_talla }}</p>
    </div>

    <!-- Epp Fornitura N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_fornitura_n', 'Epp Fornitura N:') !!}
        <p>{{ $personal->epp_fornitura_n }}</p>
    </div>

    <!-- Epp Fornitura Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_fornitura_talla', 'Epp Fornitura Talla:') !!}
        <p>{{ $personal->epp_fornitura_talla }}</p>
    </div>

    <!-- Epp Gas N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gas_n', 'Epp Gas N:') !!}
        <p>{{ $personal->epp_gas_n }}</p>
    </div>

    <!-- Epp Pr24 N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pr24_n', 'Epp Pr24 N:') !!}
        <p>{{ $personal->epp_pr24_n }}</p>
    </div>

    <!-- Epp Credencial N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_credencial_n', 'Epp Credencial N:') !!}
        <p>{{ $personal->epp_credencial_n }}</p>
    </div>

    <!-- Epp Chamarra N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chamarra_n', 'Epp Chamarra N:') !!}
        <p>{{ $personal->epp_chamarra_n }}</p>
    </div>

    <!-- Epp Chamarra Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chamarra_talla', 'Epp Chamarra Talla:') !!}
        <p>{{ $personal->epp_chamarra_talla }}</p>
    </div>

    <!-- Epp Chaleco N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chaleco_n', 'Epp Chaleco N:') !!}
        <p>{{ $personal->epp_chaleco_n }}</p>
    </div>

    <!-- Epp Chaleco Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chaleco_talla', 'Epp Chaleco Talla:') !!}
        <p>{{ $personal->epp_chaleco_talla }}</p>
    </div>

    <!-- Epp Coipa N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_coipa_n', 'Epp Coipa N:') !!}
        <p>{{ $personal->epp_coipa_n }}</p>
    </div>

    <!-- Epp Guantes N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_guantes_n', 'Epp Guantes N:') !!}
        <p>{{ $personal->epp_guantes_n }}</p>
    </div>

    <!-- Epp Guantes Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_guantes_talla', 'Epp Guantes Talla:') !!}
        <p>{{ $personal->epp_guantes_talla }}</p>
    </div>

    <!-- Epp Lampara N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_lampara_n', 'Epp Lampara N:') !!}
        <p>{{ $personal->epp_lampara_n }}</p>
    </div>

    <!-- Epp Cubrebocas N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_cubrebocas_n', 'Epp Cubrebocas N:') !!}
        <p>{{ $personal->epp_cubrebocas_n }}</p>
    </div>

    <!-- Epp Tapones N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_tapones_n', 'Epp Tapones N:') !!}
        <p>{{ $personal->epp_tapones_n }}</p>
    </div>

    <!-- Epp Lentes N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_lentes_n', 'Epp Lentes N:') !!}
        <p>{{ $personal->epp_lentes_n }}</p>
    </div>
</div>



