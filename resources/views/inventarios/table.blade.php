<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    
    <div class="table-responsive">
        <table class="display nowrap table table-striped text-center" id="inventarios-table">
            <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Existencia</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <td class="text-center">{{ $inventario->codigo }}</td>
                    <td class="text-center">{{ $inventario->nombre }}</td>
                    <td class="text-center">{{ $inventario->existencia }}</td>
                    <td class="text-center">
                        @if($inventario->image)
                            <img src="{{asset('assets/inventary_imgs/' . $inventario->image)}}" alt="" style="width: auto; height: auto;max-width: 100px; max-height: 100px;">
                        @else
                            <img src="{{asset('assets/inventary_imgs/default.webp')}}" alt="" style="width: auto; height: auto;max-width: 100px; max-height: 100px;">
                        @endif
                    </td> 
                    <td class="text-center" style="width: 120px">
                        {!! Form::open(['route' => ['inventarios.destroy', $inventario->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('inventarios.show', [$inventario->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('inventarios.edit', [$inventario->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro que desea eliminar el registro?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $inventarios])
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
    new DataTable('#inventarios-table', {
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
        paginate: true,
        select: true
    });
</script>