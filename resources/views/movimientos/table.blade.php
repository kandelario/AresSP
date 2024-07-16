<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="movimientos-table">
            <thead>
                <tr>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Item</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            @foreach($movimientos as $movimiento)
                <tr>
                    <td class="text-center">{{ $movimiento->entrada }}</td>
                    <td class="text-center">{{ $movimiento->salida }}</td>
                    <td class="text-center">{{ $movimiento->itemID }}</td>
                    <td class="text-center"  style="min-width: 120px; width:auto;">
                        {!! Form::open(['route' => ['movimientos.destroy', $movimiento->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('movimientos.show', [$movimiento->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('movimientos.edit', [$movimiento->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que quiere eliminar el registro?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $movimientos])
        </div>
    </div>
</div>
