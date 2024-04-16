<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clientes-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Nguardias</th>
                <th>Guardia Sueldo Dia</th>
                <th>Guardia Sueldo Mes</th>
                <th>N Jefe Turno</th>
                <th>Jefe Turno Sueldo Dia</th>
                <th>Jefe Turno Sueldo Mes</th>
                <th>N Jefe Servicio</th>
                <th>Jefe Serv Sueldo Dia</th>
                <th>Jefe Serv Sueldo Mes</th>
                <th>N Monitorista</th>
                <th>Monitor Sueldoxdia</th>
                <th>Monitor Sueldoxmes</th>
                <th>N Canino</th>
                <th>Costocanino</th>
                <th>Facturaxmes</th>
                <th>Iva</th>
                <th>Iva Retenido</th>
                <th>Total Factura</th>
                <th>Fecha Emision</th>
                <th>Nombre Contacto1</th>
                <th>Email Contact1</th>
                <th>Nombre Contacto2</th>
                <th>Email Contact2</th>
                <th>Rfc</th>
                <th>Vigencia</th>
                <th>Observaciones</th>
                <th>Constancia Sf</th>
                <th>Enable</th>
                <th>Paymentid</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->nGuardias }}</td>
                    <td>{{ $cliente->guardia_sueldo_dia }}</td>
                    <td>{{ $cliente->guardia_sueldo_mes }}</td>
                    <td>{{ $cliente->n_jefe_turno }}</td>
                    <td>{{ $cliente->jefe_turno_sueldo_dia }}</td>
                    <td>{{ $cliente->jefe_turno_sueldo_mes }}</td>
                    <td>{{ $cliente->n_jefe_servicio }}</td>
                    <td>{{ $cliente->jefe_serv_sueldo_dia }}</td>
                    <td>{{ $cliente->jefe_serv_sueldo_mes }}</td>
                    <td>{{ $cliente->n_monitorista }}</td>
                    <td>{{ $cliente->monitor_sueldoxdia }}</td>
                    <td>{{ $cliente->monitor_sueldoxmes }}</td>
                    <td>{{ $cliente->n_canino }}</td>
                    <td>{{ $cliente->costocanino }}</td>
                    <td>{{ $cliente->facturaxmes }}</td>
                    <td>{{ $cliente->iva }}</td>
                    <td>{{ $cliente->iva_retenido }}</td>
                    <td>{{ $cliente->total_factura }}</td>
                    <td>{{ $cliente->fecha_emision }}</td>
                    <td>{{ $cliente->nombre_contacto1 }}</td>
                    <td>{{ $cliente->email_contact1 }}</td>
                    <td>{{ $cliente->nombre_contacto2 }}</td>
                    <td>{{ $cliente->email_contact2 }}</td>
                    <td>{{ $cliente->rfc }}</td>
                    <td>{{ $cliente->vigencia }}</td>
                    <td>{{ $cliente->observaciones }}</td>
                    <td>{{ $cliente->constancia_sf }}</td>
                    <td>{{ $cliente->enable }}</td>
                    <td>{{ $cliente->paymentID }}</td>
                    <td  style="width: 120px">
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
