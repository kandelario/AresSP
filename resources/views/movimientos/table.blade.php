<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="display nowrap table table-striped" id="movimientos-table">
            <thead>
                <tr>
                    <th class="text-center">#id</th>
                    <th class="text-center">Salida</th>
                    <th class="text-center">Item</th>
                    <th class="text-center">Quien realizó la salida</th>
                    <th class="text-center">Observaciones</th>
                    <th class="text-center">Acción</th>
                </tr>
            </thead>
            <tbody>
            @foreach($movimientos as $movimiento)
                <tr>
                    <td class="text-center">{{ $movimiento->id }}</td>
                    <td class="text-center">{{ $movimiento->salida }}</td>
                    <td class="text-center">
                        @foreach ($inventarios as $item)
                            @if ($item->id == $movimiento->itemID)
                                {{ $item->nombre }}
                            @else
                                {{'No se encontró el item'}}
                            @endif
                        @endforeach
                    </td>
                    <td class="text-center">
                        @foreach ($usuarios as $usuario)
                            @if ($usuario->id == $movimiento->userID)
                                {{ $usuario->name }}
                            @endif
                        @endforeach
                    </td>
                    <td style="text-align: justify;">
                        @if ($movimiento->observaciones != "")
                            {{ $movimiento->observaciones }}
                        @else
                            {{ 'N/A' }}
                        @endif
                        
                    </td>
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
    new DataTable('#movimientos-table', {
    layout: {
        topStart: {
            buttons: [
                //'copy',
                //'csv',
                'excel',
                //'pdf',
                'print'
            ]
        }
    },
        paginate: true,
        select: true
    });
</script>