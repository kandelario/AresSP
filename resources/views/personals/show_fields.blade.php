<div class="row form-group card-body m-0 mt-4 p-0">
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

<div class="row form-group card-body m-0 mt-4 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Documentos</h3></div>

    <!-- Solicitud Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('solicitud', 'Solicitud:') !!}
        @if ($personal->solicitud == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Check List Ingreso Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('check_list_ingreso', 'Check List Ingreso:') !!}
        @if ($personal->check_list_ingreso == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Carta Compromiso Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('carta_compromiso', 'Carta Compromiso:') !!}
        @if ($personal->carta_compromiso == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Resguardo Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('resguardo', 'Resguardo:') !!}
        @if ($personal->resguardo == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Contrato Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('contrato', 'Contrato:') !!}
        @if ($personal->contrato == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Retencion Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('retencion', 'Retencion:') !!}
        @if ($personal->retencion == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Renuncia Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('renuncia', 'Renuncia:') !!}
        @if ($personal->renuncia == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Actas Administrativas Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('actas_administrativas', 'Actas Administrativas:') !!}
        @if ($personal->actas_administrativas == 1)
            <p class="text-danger">{{'Tiene Acta Administrativa'}}</p>
        @else
            <p>{{'Sin Acta'}}</p>
        @endif
    </div>

    <!-- Honorarios Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('honorarios', 'Honorarios:') !!}
        @if ($personal->honorarios == 1)
            <p>{{'Sí'}}</p>
        @else
            <p>{{'No'}}</p>
        @endif
    </div>

    <!-- Identificacion Oficial Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('identificacion_oficial', 'Identificacion Oficial:') !!}
        @if ($personal->identificacion_oficial == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Acta Nacimiento Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('acta_nacimiento', 'Acta Nacimiento:') !!}
        @if ($personal->acta_nacimiento == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Curp Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('curp', 'Curp:') !!}
        <p>{{ $personal->curp }}</p>
    </div>

    <!-- Curp Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('curp_doc', 'Curp Doc:') !!}
        @if ($personal->curp_doc == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Rfc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('rfc', 'Rfc:') !!}
        <p>{{ $personal->rfc }}</p>
    </div>

    <!-- Rfc Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('rfc_doc', 'Rfc Doc:') !!}
        @if ($personal->rfc_doc == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Nss Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('nss', 'Nss:') !!}
        <p>{{ $personal->nss }}</p>
    </div>

    <!-- Nss Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('nss_doc', 'Nss Doc:') !!}
        @if ($personal->nss_doc == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Comprobante Domicilio Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('comprobante_domicilio', 'Comprobante Domicilio:') !!}
        @if ($personal->comprobante_domicilio == 1)
            <p>{{'Recibido'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Comprobante Estudios Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('comprobante_estudios', 'Comprobante Estudios:') !!}
        @if ($personal->comprobante_estudios == 1)
            <p>{{'Recibido'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Recomendaciones Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
        <p>{{ $personal->recomendaciones }}</p>
    </div>
</div>

<div class="row form-group card-body m-0 mt-4 p-0">
    <div class="col-sm-12 mb-2 text-center"><h3>Equipo de Protección Personal y Uniforme</h3></div>

    <!-- Recomendacion Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('recomendacion_doc', 'Recomendacion Doc:') !!}
        @if ($personal->recomendacion_doc == 1)
            <p>{{'Recibida'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Certificado Medico Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('certificado_medico', 'Certificado Medico:') !!}
        @if ($personal->certificado_medico == 1)
            <p>{{'Recibido'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Antecedentes No Penales Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('antecedentes_no_penales', 'Antecedentes No Penales:') !!}
        @if ($personal->antecedentes_no_penales == 1)
            <p>{{'Recibido'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Cartilla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('cartilla', 'Cartilla:') !!}
        @if ($personal->cartilla == 1)
            <p>{{'Recibido'}}</p>
        @else
            <p>{{'Pendiente'}}</p>
        @endif
    </div>

    <!-- Enable Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('enable', 'Personal Activo:') !!}
        @if ($personal->enable == 1)
            <p>{{'Sí'}}</p>
        @else
            <p>{{'No'}}</p>
        @endif
    </div>

    <!-- Otro Doc Nombre Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('otro_doc_nombre', 'Otro Doc Nombre:') !!}
        @if ($personal->otro_doc_nombre != "")
            <p>{{ $personal->otro_doc_nombre }}</p>
        @else
            <p>{{ 'N/A' }}</p>
        @endif
    </div>

    <!-- Otro Doc Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('otro_doc', 'Otro Doc:') !!}
        @if ($personal->otro_doc == 1)
            <p>{{'Recibido'}}</p>
        @else
            @if ($personal->otro_doc_nombre== 1)
                <p>{{'Pendiente la entrega del documento' . $personal->otro_doc_nombre}}</p>
            @else
                <p>{{'N/A'}}</p>
            @endif
        @endif
    </div>

    <!-- Epp Pantalon N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pantalon_n', 'Epp Pantalon (cantidad):') !!}
        @if ($personal->epp_pantalon_n > 0)
            <p>{{$personal->epp_pantalon_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Pantalon Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pantalon_talla', 'Epp Pantalon Talla:') !!}
        @if ($personal->epp_pantalon_talla != "")
            <p>{{ $personal->epp_pantalon_talla }}</p>    
        @else
            <p>{{ 'N/A' }}</p>
        @endif
    </div>

    <!-- Epp Camisola N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_camisola_n', 'Epp Camisola (cantidad):') !!}
        @if ($personal->epp_camisola_n > 0)
            <p>{{$personal->epp_camisola_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Camisola Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_camisola_talla', 'Epp Camisola Talla:') !!}
        @if ($personal->epp_camisola_talla != "")
            <p>{{ $personal->epp_camisola_talla }}</p>    
        @else
            <p>{{ 'N/A' }}</p>
        @endif
    </div>

    <!-- Epp Gorra N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gorra_n', 'Epp Gorra (cantidad):') !!}
        @if ($personal->epp_gorra_n > 0)
            <p>{{$personal->epp_gorra_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Gorra Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gorra_talla', 'Epp Gorra Talla:') !!}
        @if ($personal->epp_gorra_talla != "")
            <p>{{ $personal->epp_gorra_talla }}</p>    
        @else
            <p>{{ 'N/A' }}</p>
        @endif
    </div>

    <!-- Epp Fornitura N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_fornitura_n', 'Epp Fornitura (cantidad):') !!}
        @if ($personal->epp_fornitura_n > 0)
            <p>{{$personal->epp_fornitura_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Fornitura Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_fornitura_talla', 'Epp Fornitura Talla:') !!}
        @if ($personal->epp_fornitura_talla != "")
            <p>{{ $personal->epp_fornitura_talla }}</p>    
        @else
            <p>{{ 'N/A' }}</p>
        @endif
    </div>

    <!-- Epp Gas N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_gas_n', 'Epp Gas (cantidad):') !!}
        @if ($personal->epp_gas_n > 0)
            <p>{{$personal->epp_gas_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Pr24 N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_pr24_n', 'Epp Pr24 (cantidad):') !!}
        @if ($personal->epp_pr24_n > 0)
            <p>{{$personal->epp_pr24_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Credencial N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_credencial_n', 'Epp Credencial (cantidad):') !!}
        @if ($personal->epp_credencial_n > 0)
            <p>{{$personal->epp_credencial_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Chamarra N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chamarra_n', 'Epp Chamarra (cantidad):') !!}
        @if ($personal->epp_chamarra_n > 0)
            <p>{{$personal->epp_chamarra_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Chamarra Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chamarra_talla', 'Epp Chamarra Talla:') !!}
        @if ($personal->epp_chamarra_talla != "")
            <p>{{$personal->epp_chamarra_talla}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Chaleco N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chaleco_n', 'Epp Chaleco (cantidad):') !!}
        @if ($personal->epp_chaleco_n > 0)
            <p>{{$personal->epp_chaleco_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Chaleco Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_chaleco_talla', 'Epp Chaleco Talla:') !!}
        @if ($personal->epp_chaleco_talla != "")
            <p>{{$personal->epp_chaleco_talla}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Coipa N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_coipa_n', 'Epp Coipa (cantidad):') !!}
        @if ($personal->epp_coipa_n > 0)
            <p>{{$personal->epp_coipa_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Guantes N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_guantes_n', 'Epp Guantes (cantidad):') !!}
        @if ($personal->epp_guantes_n > 0)
            <p>{{$personal->epp_guantes_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Guantes Talla Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_guantes_talla', 'Epp Guantes Talla:') !!}
        @if ($personal->epp_guantes_talla != "")
            <p>{{$personal->epp_guantes_talla}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Lampara N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_lampara_n', 'Epp Lampara (cantidad):') !!}
        @if ($personal->epp_lampara_n > 0)
            <p>{{$personal->epp_lampara_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Cubrebocas N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_cubrebocas_n', 'Epp Cubrebocas (cantidad):') !!}
        @if ($personal->epp_cubrebocas_n > 0)
            <p>{{$personal->epp_cubrebocas_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Tapones N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_tapones_n', 'Epp Tapones (cantidad):') !!}
        @if ($personal->epp_tapones_n > 0)
            <p>{{$personal->epp_tapones_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>

    <!-- Epp Lentes N Field -->
    <div class="col-sm-3 text-uppercase text-center">
        {!! Form::label('epp_lentes_n', 'Epp Lentes (cantidad):') !!}
        @if ($personal->epp_lentes_n > 0)
            <p>{{$personal->epp_lentes_n}}</p>
        @else
            <p>{{'N/A'}}</p>
        @endif
    </div>
</div>



