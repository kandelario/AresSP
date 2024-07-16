<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="display nowrap table table-striped" id="asistencias-table">
            <thead>
            <tr>
                <th class="text-center">Fecha Asistencia</th>
                <th class="text-center">Asistio</th>
                <th class="text-center">Personal</th>
                <th class="text-center">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($asistencias as $asistencia)
                <tr>
                    <td class="text-center">{{ $asistencia->hoy }}</td>
                    <td class="text-center">
                        {{ $asistencia->asistio }}
                        @if ($asistencia->asistio == 1)
                            {{ "Sí" }}
                        @else
                            {{ "No" }}
                        @endif
                    </td class="text-center">
                    <td class="text-center">
                        @if (isset($personals))
                            @foreach($personals as $personal)
                                @if ($personal->id == $asistencia->idPersonal)
                                    {{$personal->name}}
                                @else
                                    {{"Personal no registrado en listado de personal."}}
                                @endif
                            @endforeach    
                        @else
                            {{"No hay personal registrado."}}
                        @endif
                        
                    </td>
                    <td class="text-center" style="width: 120px">
                        {!! Form::open(['route' => ['asistencias.destroy', $asistencia->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('asistencias.show', [$asistencia->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('asistencias.edit', [$asistencia->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $asistencias])
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
    
    new DataTable('#asistencias-table', {
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