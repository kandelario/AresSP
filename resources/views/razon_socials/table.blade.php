<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="table" id="razon-socials-table">
            <thead>
            <tr>
                <th>Razon Nombre</th>
                <th>Razon Rfc</th>
                <th>Razon Direccion</th>
                <th>Razon Telefono</th>
                <th>Razon Registro Patronal</th>
                <th>Razon Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($razonSocials as $razonSocial)
                <tr>
                    <td>{{ $razonSocial->razon_nombre }}</td>
                    <td>{{ $razonSocial->razon_rfc }}</td>
                    <td>{{ $razonSocial->razon_direccion }}</td>
                    <td>{{ $razonSocial->razon_telefono }}</td>
                    <td>{{ $razonSocial->razon_registro_patronal }}</td>
                    <td>{{ $razonSocial->razon_email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['razon-socials.destroy', $razonSocial->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('razon-socials.show', [$razonSocial->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('razon-socials.edit', [$razonSocial->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro de que quieres eliminar la razón social ' . $razonSocial->razon_nombre . '?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $razonSocials])
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

    new DataTable('#razon-socials-table', {
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
    paginate: false,
    select: true
});
</script>