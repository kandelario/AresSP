<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clientes-table">
            <thead>
            <tr>
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
                <th>Payment Type</th>
                <th>Nombrecontacto1</th>
                <th>Emailcontact1</th>
                <th>Nombrecontacto2</th>
                <th>Emailcontact2</th>
                <th>Rfc</th>
                <th>Vigencia</th>
                <th>Observaciones</th>
                <th>Logo</th>
                <th>Enable</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $clientes)
                <tr>
                    <td>{{ $clientes->nombre }}</td>
                    <td>{{ $clientes->personal }}</td>
                    <td>{{ $clientes->sueldoxdia }}</td>
                    <td>{{ $clientes->sueldoxmes }}</td>
                    <td>{{ $clientes->canino }}</td>
                    <td>{{ $clientes->costocanino }}</td>
                    <td>{{ $clientes->sueldoquincena }}</td>
                    <td>{{ $clientes->facturaxmes }}</td>
                    <td>{{ $clientes->iva }}</td>
                    <td>{{ $clientes->ivaretenido }}</td>
                    <td>{{ $clientes->totalfactura }}</td>
                    <td>{{ $clientes->fechaemision }}</td>
                    <td>{{ $clientes->payment_type }}</td>
                    <td>{{ $clientes->nombrecontacto1 }}</td>
                    <td>{{ $clientes->emailcontact1 }}</td>
                    <td>{{ $clientes->nombrecontacto2 }}</td>
                    <td>{{ $clientes->emailcontact2 }}</td>
                    <td>{{ $clientes->rfc }}</td>
                    <td>{{ $clientes->vigencia }}</td>
                    <td>{{ $clientes->observaciones }}</td>
                    <td>{{ $clientes->logo }}</td>
                    <td>{{ $clientes->enable }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clientes.destroy', $clientes->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clientes.show', [$clientes->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', [$clientes->id]) }}"
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
