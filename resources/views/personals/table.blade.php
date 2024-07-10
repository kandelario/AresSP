{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="display nowrap table table-striped text-center" id="myTable">
            <thead>
            <tr>
                <th>N. Empleado</th>
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
                <th>Estatus</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personals as $personal)
                <tr>
                    <td class="text-uppercase">{{ $personal->n_emp }}</td>
                    <td class="text-uppercase">{{ $personal->name }}</td>
                    <td class="text-uppercase">{{ $personal->domicilio }}</td>
                    <td class="text-uppercase">{{ $personal->telefonos }}</td>
                    <td class="text-uppercase">{{ $personal->telefono_contacto }}</td>
                    <td class="text-uppercase">{{ $personal->email }}</td>
                    <td class="text-uppercase">{{ $personal->fecha_cumple }}</td>
                    <td class="text-uppercase">{{ $personal->fecha_inicio_serv }}</td>

                    <td class="text-uppercase text-center">
                        {{-- {{ $personal->solicitud }} --}}
                        @if ($personal->solicitud == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->check_list_ingreso == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->carta_compromiso == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->resguardo == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->contrato == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->retencion == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->renuncia == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->actas_administrativas == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->honorarios == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->identificacion_oficial == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->acta_nacimiento == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase">{{ $personal->curp }}</td>
                    <td class="text-uppercase text-center">
                        @if ($personal->curp_doc == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase">{{ $personal->rfc }}</td>
                    <td class="text-uppercase text-center">
                        @if ($personal->rfc_doc == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase">{{ $personal->nss }}</td>
                    <td class="text-uppercase text-center">
                        @if ($personal->nss_doc == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->comprobante_domicilio == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->comprobante_estudios == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">{{ $personal->recomendaciones }}</td>
                    <td class="text-uppercase text-center">
                        @if ($personal->recomendacion_doc == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->certificado_medico == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->antecedentes_no_penales == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center">
                        @if ($personal->cartilla == 1)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td class="text-uppercase text-center text-success">
                        @if ($personal->enable == 1)
                            <span class="text-success">Activo</span>
                        @elseif($personal->enable == 0)
                            <span class="text-danger">Inactivo</span>
                        @endif
                    </td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['personals.destroy', $personal->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('personals.show', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> --}}
<script src="{{ asset('/assets/js/dataTables.js') }}"></script>
<script src="{{ asset('/assets/js/dataTables.buttons.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.dataTables.js') }}"></script>
<script src="{{ asset('/assets/js/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.print.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    //new DataTable('#myTable');
    new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: [
                // 'copy',
                // 'csv',
                'excel',
                // 'pdf',
                'print'
            ]
        }
    }
});
</script>