<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="personals-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Domicilio</th>
                <th>Telefonos</th>
                <th>Telefono Contacto</th>
                <th>Email</th>
                <th>Fecha Cumple</th>
                <th>Fecha Inicio Serv</th>
                <th>Solicitud</th>
                <th>Check List Ingreso</th>
                <th>Carta Compromiso</th>
                <th>Resguardo</th>
                <th>Contrato</th>
                <th>Retencion</th>
                <th>Renuncia</th>
                <th>Actas Administrativas</th>
                <th>Honorarios</th>
                <th>Identificacion Oficial</th>
                <th>Acta Nacimiento</th>
                <th>Curp</th>
                <th>Curp Doc</th>
                <th>Rfc</th>
                <th>Rfc Doc</th>
                <th>Nss</th>
                <th>Nss Doc</th>
                <th>Comprobante Domicilio</th>
                <th>Comprobante Estudios</th>
                <th>Recomendaciones</th>
                <th>Recomendación Doc</th>
                <th>Certificado Medico</th>
                <th>Antecedentes No Penales</th>
                <th>Cartilla</th>
                <th>Enable</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personals as $personal)
                <tr>
                    <td>{{ $personal->name }}</td>
                    <td>{{ $personal->domicilio }}</td>
                    <td>{{ $personal->telefonos }}</td>
                    <td>{{ $personal->telefono_contacto }}</td>
                    <td>{{ $personal->email }}</td>
                    <td>{{ $personal->fecha_cumple }}</td>
                    <td>{{ $personal->fecha_inicio_serv }}</td>
                    <td>{{ $personal->solicitud }}</td>
                    <td>{{ $personal->check_list_ingreso }}</td>
                    <td>{{ $personal->carta_compromiso }}</td>
                    <td>{{ $personal->resguardo }}</td>
                    <td>{{ $personal->contrato }}</td>
                    <td>{{ $personal->retencion }}</td>
                    <td>{{ $personal->renuncia }}</td>
                    <td>{{ $personal->actas_administrativas }}</td>
                    <td>{{ $personal->honorarios }}</td>
                    <td>{{ $personal->identificacion_oficial }}</td>
                    <td>{{ $personal->acta_nacimiento }}</td>
                    <td>{{ $personal->curp }}</td>
                    <td>{{ $personal->curp_doc }}</td>
                    <td>{{ $personal->rfc }}</td>
                    <td>{{ $personal->rfc_doc }}</td>
                    <td>{{ $personal->nss }}</td>
                    <td>{{ $personal->nss_doc }}</td>
                    <td>{{ $personal->comprobante_domicilio }}</td>
                    <td>{{ $personal->comprobante_estudios }}</td>
                    <td>{{ $personal->recomendaciones }}</td>
                    <td>{{ $personal->recomendación_doc }}</td>
                    <td>{{ $personal->certificado_medico }}</td>
                    <td>{{ $personal->antecedentes_no_penales }}</td>
                    <td>{{ $personal->cartilla }}</td>
                    <td>{{ $personal->enable }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['personals.destroy', $personal->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('personals.show', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('personals.edit', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $personals])
        </div>
    </div>
</div>
