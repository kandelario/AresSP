<!-- Razon Nombre Field -->
<div class="col-sm-4">
    {!! Form::label('razon_nombre', 'Razon Nombre:') !!}
    <p>{{ $razonSocial->razon_nombre }}</p>
</div>

<!-- Razon Rfc Field -->
<div class="col-sm-4">
    {!! Form::label('razon_rfc', 'Razon Rfc:') !!}
    <p>
        @if ($razonSocial->razon_rfc != "")
            {{ $razonSocial->razon_rfc }}
        @else
            {{ 'N/A' }}
        @endif
    </p>
</div>

<!-- Razon Registro Patronal Field -->
<div class="col-sm-4">
    {!! Form::label('razon_registro_patronal', 'Razon Registro Patronal:') !!}
    <p>
        @if ($razonSocial->razon_registro_patronal != "")
            {{ $razonSocial->razon_registro_patronal }}
        @else
            {{ 'N/A' }}
        @endif
    </p>
</div>

<!-- Razon Direccion Field -->
<div class="col-sm-4">
    {!! Form::label('razon_direccion', 'Razon Direccion:') !!}
    <p>
        @if ($razonSocial->razon_direccion != "")
            {{ $razonSocial->razon_direccion }}
        @else
            {{ 'N/A' }}
        @endif
    </p>
</div>

<!-- Razon Telefono Field -->
<div class="col-sm-4">
    {!! Form::label('razon_telefono', 'Razon Telefono:') !!}
    <p>
        @if ($razonSocial->razon_telefono != "")
            {{ $razonSocial->razon_telefono }}
        @else
            {{ 'N/A' }}
        @endif
    </p>
</div>



<!-- Razon Email Field -->
<div class="col-sm-4">
    {!! Form::label('razon_email', 'Razon Email:') !!}
    <p>
        @if ($razonSocial->razon_email != "")
            {{ $razonSocial->razon_email }}
        @else
            {{ 'N/A' }}
        @endif
    </p>
</div>

