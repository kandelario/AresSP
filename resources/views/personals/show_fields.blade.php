<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $personal->name }}</p>
</div>

<!-- Domicilio Field -->
<div class="col-sm-12">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    <p>{{ $personal->domicilio }}</p>
</div>

<!-- Telefonos Field -->
<div class="col-sm-12">
    {!! Form::label('telefonos', 'Telefonos:') !!}
    <p>{{ $personal->telefonos }}</p>
</div>

<!-- Telefono Contacto Field -->
<div class="col-sm-12">
    {!! Form::label('telefono_contacto', 'Telefono Contacto:') !!}
    <p>{{ $personal->telefono_contacto }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $personal->email }}</p>
</div>

<!-- Fecha Inicio Serv Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    <p>{{ $personal->fecha_inicio_serv }}</p>
</div>

<!-- Enable Field -->
<div class="col-sm-12">
    {!! Form::label('enable', 'Enable:') !!}
    <p>{{ $personal->enable }}</p>
</div>

