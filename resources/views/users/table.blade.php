{{-- @section('style_knd')
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></style>
<style type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></style>
<style type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css"></style>
<style type="text/css" href="https://cdn.datatables.net/responsive/3.0.1/css/responsive.bootstrap4.css"></style>
@stop --}}

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
                <th>Nombre de usuario</th>
                <th>Correo electrónico</th>
                <th>Fecha de verificación del correo electrónico</th>
                {{-- <th>Password</th> --}}
                {{-- <th>Remember Token</th> --}}
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                    {{-- <td>{{ $user->password }}</td> --}}
                    {{-- <td>{{ $user->remember_token }}</td> --}}
                    <td  style="width: 120px">
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
    $('#users-table').DataTable( {
        responsive: true
    } );
</script>
@stop --}}