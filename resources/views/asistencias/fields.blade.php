<!-- Hoy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoy', 'Fecha:') !!}
    @if (isset($asistencia->hoy) && ($asistencia->hoy != ""))
            {!! Form::date('hoy', str_replace(' 00:00:00', '', $asistencia->hoy), ['class' => 'form-control text-uppercase','id'=>'hoy']) !!}
        @else
            {!! Form::date('hoy', null, ['class' => 'form-control text-uppercase','id'=>'hoy']) !!}
        @endif
    {{-- {!! Form::date('hoy', null, ['class' => 'form-control']) !!} --}}
    @error('hoy')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Fecha de asistencia requerida.</em></span>
    @enderror
</div>

{{-- <!-- Personal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Clientes:') !!}
    <select name="cliente_id" id="idPersonal" class="form-control">
        @if (isset($clientes) && count($clientes) > 0)
            @foreach ($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
            @endforeach
        @else
            <option value="">No existen clientes registrados</option>
        @endif
    </select>
    @error('cliente_id')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar el personal para registrar la asistencia.</em></span>
    @enderror
</div> --}}

<!-- Personal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPersonal', 'Personal:') !!}
    <select name="idPersonal" id="idPersonal" class="form-control">
        @if (isset($personals) && count($personals) > 0)
            @if (isset($asignaciones) && count($asignaciones) > 0)
                @foreach ($asignaciones as $asignacion)
                    @foreach ($personals as $personal)
                        @if ($personal->id == $asignacion->personal_id)
                            @if ($personal->id == $asistencia->idPersonal)
                                <option value="{{$personal->id}}" selected>{{$personal->name}}</option>
                            @else
                                <option value="{{$personal->id}}">{{$personal->name}}</option>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            @else
                @foreach ($personals as $personal)
                    <option value="{{$personal->id}}">{{$personal->name}}</option>
                @endforeach
            @endif
            
        @else
            <option value="">No existe Personal</option>
        @endif
    </select>
    @error('idPersonal')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar el personal para registrar la asistencia.</em></span>
    @enderror
</div>

<!-- Siglas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idSiglas', 'Siglas:') !!}
    <select name="idSiglas" id="idSiglas" class="form-control">
        @if (isset($siglas) && count($siglas) > 0)
            <option value="">Seleccione siglas</option>
            @foreach ($siglas as $sigla)
                @if (isset($asistencia) && ($asistencia->idSiglas == $sigla->id))
                    <option value="{{ $sigla->id }}" selected>{{ $sigla->name . ' - ' . $sigla->knowledge }}</option>
                @else
                    <option value="{{ $sigla->id }}">{{ $sigla->name . ' - ' . $sigla->knowledge }}</option>
                @endif
                
                {{-- <option value="{{ $sigla->id }}" {{ old('idSiglas') == $sigla->id ? 'selected' : '' }}>{{ $sigla->name }}</option> --}}
            @endforeach
        @else
            <option value="">No existen siglas</option>
        @endif

    </select>
    @error('idSiglas')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar unas siglas para continuar con el registro de asistencia.</em></span>
    @enderror
</div>
<!-- Observaciones Field -->
<div class="form-group col-sm-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    @if (isset($asistencias->observaciones) && $asistencias->observaciones != "")
        {!! Form::textarea('observaciones', $asistencias->observaciones, ['class' => 'form-control']) !!}    
    @else
        {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
    @endif
</div>
{{-- @if (isset($idPersonal))
    {!! Form::number('idPersonal', {{  $idPersonal }}, ['class' => 'form-control', 'required']) !!}
@else
    @if (isset(old('idPersonal')))
        {!! Form::number('idPersonal', {{  old('idPersonal') }}, ['class' => 'form-control', 'required']) !!}
    @else
        {!! Form::number('idPersonal', null, ['class' => 'form-control', 'required']) !!}
    @endif
@endif --}}