<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="personals-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Domicilio</th>
                <th>Telefonos</th>
                <th>Telefono Contacto</th>
                <th>Email</th>
                <th>Fecha Inicio Serv</th>
                <th>Enable</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($personals as $personal)
                <tr>
                    <td>{{ $personal->name }}</td>
                    <td>{{ $personal->domicilio }}</td>
                    <td>{{ $personal->telefonos }}</td>
                    <td>{{ $personal->telefono_contacto }}</td>
                    <td>{{ $personal->email }}</td>
                    <td>{{ $personal->fecha_inicio_serv }}</td>
                    <td>{{ $personal->enable }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['personals.destroy', $personal->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('personals.show', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('personals.edit', [$personal->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $personals])
        </div>
    </div>
</div>
