<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clientes-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Personal</th>
                <th>Sueldoxdia</th>
                <th>Sueldoxmes</th>
                <th>Canino</th>
                <th>Costocanino</th>
                <th>Sueldoquincena</th>
                <th>Facturaxmes</th>
                <th>Iva</th>
                <th>Ivaretenido</th>
                <th>Totalfactura</th>
                <th>Fechaemision</th>
                <th>Nombrecontacto1</th>
                <th>Emailcontact1</th>
                <th>Nombrecontacto2</th>
                <th>Emailcontact2</th>
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
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->personal }}</td>
                    <td>{{ $cliente->sueldoxdia }}</td>
                    <td>{{ $cliente->sueldoxmes }}</td>
                    <td>{{ $cliente->canino }}</td>
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
