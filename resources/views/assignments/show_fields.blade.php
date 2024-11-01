<!-- Cliente Field -->
<div class="col-sm-6">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{{ $clientee->nombre }}</p>
</div>

<!-- Puesto Field -->
<div class="col-sm-6">
    {!! Form::label('puesto', 'Puesto:') !!}
    <p>{{ $assignments->puesto }}</p>
</div>

<!-- Fecha Inicio Serv Field -->
<div class="col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    {{-- <p>{{ substr($assignmentt->fecha_inicio_serv, 0, 10) }}</p> --}}
    <p>{{ substr($assignments->fecha_inicio_serv, 0, 10) }}</p>
</div>

<!-- Personal Field -->
<div class="col-sm-6">
    {!! Form::label('personal', 'Personal:') !!}
    <p>{{ $personaa->name }}</p>
</div>