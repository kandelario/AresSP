<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clientes-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>N° de Personal</th>
                <th>Sueldo por dia</th>
                <th>Sueldo por mes</th>
                <th>¿Canino?</th>
                <th>Costo canino</th>
                <th>Sueldo por quincena</th>
                <th>Factura por mes</th>
                <th>IVA</th>
                <th>IVA Retenido</th>
                <th>Total a Factura</th>
                <th>Fecha de Emisión</th>
                <th>Nombre de Contacto 1</th>
                <th>Email de Contacto 1</th>
                <th>Nombre de Contacto 2</th>
                <th>Email de Contacto 2</th>
                <th>RFC</th>
                <th>Vigencia</th>
                <th>Observaciones</th>
                <th>Constancia de SF</th>
                <th>Activo</th>
                <th>Tipo de Pago</th>
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->personal }}</td>
                    <td>{{ $cliente->sueldoxdia }}</td>
                    <td>{{ $cliente->sueldoxmes }}</td>
                    <td>
                        @if($cliente->canino == 1)
                            {{ "Si" }}
                        @else
                            {{ "No" }}
                        @endif
                    </td>
                    <td>{{ $cliente->costocanino }}</td>
                    <td>{{ $cliente->sueldoquincena }}</td>
                    <td>{{ $cliente->facturaxmes }}</td>
                    <td>{{ $cliente->iva }}</td>
                    <td>{{ $cliente->ivaretenido }}</td>
                    <td>{{ $cliente->totalfactura }}</td>
                    <td>{{ $cliente->fechaemision }}</td>
                    <td>{{ $cliente->nombrecontacto1 }}</td>
                    <td>{{ $cliente->emailcontact1 }}</td>
                    <td>{{ $cliente->nombrecontacto2 }}</td>
                    <td>{{ $cliente->emailcontact2 }}</td>
                    <td>{{ $cliente->rfc }}</td>
                    <td>{{ $cliente->vigencia }}</td>
                    <td>{{ $cliente->observaciones }}</td>
                    <td>
                        @if($cliente->constancia_sf != "")
                            {{ "Si" }}
                        @else
                            {{ "No" }}
                        @endif
                    </td>
                    <td>
                        @if($cliente->enable == 1)
                            {{ "Si" }}
                        @else
                            {{ "No" }}
                        @endif
                    </td>
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
