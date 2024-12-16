{{-- @section('style_knd')
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></style>
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></style>
<style type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css"></style>
<style type="text/css" href="https://cdn.datatables.net/responsive/3.0.1/css/responsive.bootstrap4.css"></style>
@stop --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="display nowrap table table-striped" id="user-table">
            <thead>
            <tr>
                <th class="text-center">Nombre de usuario</th>
                <th class="text-center">Correo electrónico</th>
                {{-- <th class="text-center">Fecha de verificación del correo electrónico</th> --}}
                {{-- <th>Password</th> --}}
                {{-- <th>Remember Token</th> --}}
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if ($user->email != 'cande.pacheco@gmail.com' && Auth())
                    <tr>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        {{-- <td>{{ $user->email_verified_at }}</td> --}}
                        {{-- <td>{{ $user->password }}</td> --}}
                        {{-- <td>{{ $user->remember_token }}</td> --}}
                        <td class="text-center" style="width: 120px">
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('users.show', [$user->id]) }}"
                                class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('users.edit', [$user->id]) }}"
                                class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @else
                    
                @endif
                
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>


{{-- @section('js_knd')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.1/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.1/js/responsive.bootstrap4.js"></script>
<script>
    $('#user-table').DataTable( {
        responsive: true
    } );
</script>
@stop --}}

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
    new DataTable('#user-table', {
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