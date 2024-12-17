<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Clientes:') !!}
    {{-- {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!} --}}
    <select name="cliente_id" id="cliente_id" class="form-control">
        <option value="">Seleccione un cliente</option>

        @if (isset($clientes) && count($clientes) > 0)
            @foreach ($clientes as $cliente)
                @if (isset($client) && $client != "")
                    <option value="{{ $cliente->id }}" {{ $client->id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @else
                    <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endif
                
            @endforeach
        @else
            <option value="">No existen clientes</option>
        @endif

    </select>
    @error('cliente_id')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar un servicio para continuar con la asignación.</em></span>
    @enderror
</div>
@dd($personals)
<!-- Personal Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personal_id', 'Nombre del personal:') !!}
    {{-- {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!} --}}
    <select name="personal_id" id="personal_id" class="form-control">
        <option value="">Seleccione una persona</option>
        
        @if (isset($personals))
            @foreach ($personals as $personal)
                @foreach ($asignados as $asignado)
                    @if ($asignado->personal_id == $personal->id)
                        @foreach ($clientes as $cliente)
                            @if ($cliente->id == $asignado->cliente_id)
                                <option value="{{$personal['id']}}" {{ old('personal_id') == $personal['id'] ? 'selected' : '' }}>{{$personal['name']}} - <span class="text-success">{{ $cliente->nombre }}</span></option>
                            @endif
                        @endforeach
                    @else
                        <option value="{{$personal['id']}}" {{ old('personal_id') == $personal['id'] ? 'selected' : '' }}>{{$personal['name']}}</option>
                    @endif
                @endforeach
            @endforeach
        @else
            @if (isset($persona) && $persona->id != "")
                @foreach ($personal as $person)
                    <option value="{{$person->id}}" {{ $person->id == $persona->id ? 'selected' : '' }}>{{$person->name}}</option>
                @endforeach    
            @endif
        @endif
        
        
        
    </select>
    @error('personal_id')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar una persona para continuar con la asignación.</em></span>
    @enderror
</div>

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha Inicio Serv:') !!}
    @if (isset($assignment) && $assignment->fecha_inicio_serv != "")
        {!! Form::date('fecha_inicio_serv', substr($assignment->fecha_inicio_serv, 0, 10), ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @else
        {!! Form::date('fecha_inicio_serv', old('personal_id') != '' ? old('personal_id') : null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}    
    @endif
    @error('fecha_inicio_serv')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>El campo Fecha de inicio de servicio es requerido para continuar con la asignación.</em></span>
    @enderror
</div>

<div class="form-group col-sm-6">
    {!! Form::label('puesto', 'Ingresa el puesto a desempeñar:') !!}
    @if (isset($asignacion) && count($asignacion) > 0)
        {!! Form::text('puesto', $asignacion->puesto, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @else
        {!! Form::text('puesto', null, ['class' => 'form-control','id'=>'fecha_inicio_serv']) !!}
    @endif

    @error('puesto')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>El campo Puesto es requerido para continuar con la asignación.</em></span>
    @enderror
    
</div>

<!-- Enable Field -->
{{-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enable', 'Enable', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>

<script>
    $(function(){
        document.getElementById('cliente_id').addEventListener('change', function(){
            // var client_id = document.getElementById('cliente_id');
            if(document.getElementById('cliente_id').value != ''){
                GetPersonal(this.value);
            }
            
        });
    });
    function GetPersonal(_client_){
        //alert(_client_);
        $.ajax({
            async: false,
            cache: false,
            url: 'return_personal_not_assigned',
            data: 'cliente_id=' + _client_,
            success: function(result){
                console.log = result;
                alert(result);
            } 
        });
    }
</script>