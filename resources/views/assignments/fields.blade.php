<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    {!! Form::text('fecha_inicio_serv', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_inicio_serv').datepicker()
    </script>
@endpush

<!-- Enable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!}
</div>