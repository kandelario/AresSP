<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="assignments-table">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Personal</th>
                <th class="text-center">Fecha Inicio Servicio</th>
                <th class="text-center">Puesto</th>
                
                
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            {{-- @dd($trabajadores_asignados) --}}
            @foreach($trabajadores_asignados as $trabajador_asignado)
                <tr>
                    {{-- @dd($trabajador_asignado) --}}
                    <td class="text-center">{{ $trabajador_asignado['id'] }}</td>
                    <td class="text-center">{{ $trabajador_asignado['cliente_name'] }}</td>
                    <td class="text-center">{{ $trabajador_asignado['persona_name'] }}</td>
                    <td class="text-center">{{ substr($trabajador_asignado['fecha_inicio_serv'], 0, 10) }}</td>
                    <td class="text-center">{{ $trabajador_asignado['puesto'] }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['assignments.destroy', $trabajador_asignado['id']], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('assignments.show', [$trabajador_asignado['id']]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('assignments.edit', [$trabajador_asignado['id']]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $assignments])
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
    new DataTable('#assignments-table', {
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
    paginate: true
});
</script>