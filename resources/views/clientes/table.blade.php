<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="display nowrap table table-striped" id="clientes-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>N° personal asignado</th>
                <th>Costo Dia (Guardia)</th>
                <th>Costo Mes (Guardia)</th>
                <th>N° Jefe Turno</th>
                <th>Costo Dia (Jefe Turno)</th>
                <th>Costo Mes (Jefe Turno)</th>
                <th>N Jefe Servicio</th>
                <th>Costo x Dia (Jefe Servicio)</th>
                <th>Costo x Mes (Jefe Servicio)</th>
                <th>N° Monitorista</th>
                <th>Costo x dia (Monitor)</th>
                <th>Costo x mes (Monitor)</th>
                <th>N° Canino</th>
                <th>Costo x canino</th>
                <th>Factura x mes</th>
                <th>IVA</th>
                <th>Iva Retenido</th>
                <th>Total Factura</th>
                <th>Fecha Emision</th>
                <th>Nombre Contacto1</th>
                <th>Email Contact1</th>
                <th>Nombre Contacto2</th>
                <th>Email Contact2</th>
                <th>RFC</th>
                <th>Vigencia</th>
                <th>Observaciones</th>
                <th>Constancia S. F.</th>
                <th>Habilitado</th>
                <th>Tipo de Pago</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr class="text-center">
                    <td class="text-center">{{ $cliente->nombre }}</td>
                    <td class="text-center">{{ $cliente->nGuardias }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->guardia_sueldo_dia, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->guardia_sueldo_mes, 0) }}</td>
                    <td class="text-center">{{ $cliente->n_jefe_turno }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->jefe_turno_sueldo_dia, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->jefe_turno_sueldo_mes, 2) }}</td>
                    <td class="text-center">{{ $cliente->n_jefe_servicio }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->jefe_serv_sueldo_dia, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->jefe_serv_sueldo_mes, 2) }}</td>
                    <td class="text-center">{{ $cliente->n_monitorista }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->monitor_sueldoxdia, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->monitor_sueldoxmes, 2) }}</td>
                    <td class="text-center">{{ $cliente->n_canino }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->costocanino, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->facturaxmes, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->iva, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->iva_retenido, 2) }}</td>
                    <td class="text-center">{{ "$". number_format($cliente->total_factura, 2) }}</td>
                    <td class="text-center">{{ $cliente->fecha_emision }}</td>
                    <td class="text-center">{{ $cliente->nombre_contacto1 }}</td>
                    <td class="text-center">{{ $cliente->email_contact1 }}</td>
                    <td class="text-center">{{ $cliente->nombre_contacto2 }}</td>
                    <td class="text-center">{{ $cliente->email_contact2 }}</td>
                    <td class="text-center">{{ $cliente->rfc }}</td>
                    <td class="text-center">{{ $cliente->vigencia }}</td>
                    <td class="text-center">{{ $cliente->observaciones }}</td>
                    <td class="text-center">{{ $cliente->constancia_sf }}</td>
                    <td class="text-center">{{ $cliente->enable }}</td>
                    <td class="text-center">
                        @if (isset($tipos_pago) && count($tipos_pago) > 0)
                            @foreach ($tipos_pago as $tipo_pago)
                                @if ($tipo_pago->id == $cliente->paymentID)
                                    {{$tipo_pago->type}}
                                @endif
                            @endforeach
                        @else
                            {{'No hay tipo de pago registrados aún.'}}
                        @endif
                        {{-- {{ $cliente->paymentID }} --}}

                    </td>
                    <td class="text-center" style="width: 120px">
                        {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clientes.show', [$cliente->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', [$cliente->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $clientes])
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
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
    new DataTable('#clientes-table', {
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
    },
    paginate: false
});
</script>