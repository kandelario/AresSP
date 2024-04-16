<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="assignments-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Fecha Inicio Serv</th>
                <th>Enable</th>
                <th>Cliente Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->name }}</td>
                    <td>{{ $assignment->fecha_inicio_serv }}</td>
                    <td>{{ $assignment->enable }}</td>
                    <td>{{ $assignment->cliente_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['assignments.destroy', $assignment->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('assignments.show', [$assignment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('assignments.edit', [$assignment->id]) }}"
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
