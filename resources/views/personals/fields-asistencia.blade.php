@if (isset($personal_id))
    {!! Form::text('idPersonal', $personal_id, ['class' => 'form-control', 'required']) !!}
@else
    <span class="text-danger">No se encontró ningún personal para registrar la asistencia.</span>
@endif


@if (isset($personal_name))
    {!! Form::text('personal_name', $personal_name, ['class' => 'form-control', 'required']) !!}
@else
    <span class="text-danger">No se encontró ningún nombre de personal para registrar la asistencia.</span>
@endif

<!-- Hoy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoy', 'Fecha:') !!}
    {!! Form::date('hoy', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Personal Field -->
{{-- <div class="form-group col-sm-6">
    
    
    {!! Form::label('idPersonal', 'Personal:') !!}
    <select name="idPersonal" id="idPersonal" class="form-control">
        @if (isset($personals) && count($personals) > 0)
            @foreach ($personals as $personal)
                <option value="{{$personal['id']}}">{{$personal['name']}}</option>
            @endforeach
        @else
            <option value="">No existe Personal</option>
        @endif
    </select>

    {!! Form::label('idPersonal', 'Persona:') !!}
    <select name="idPersonal" id="idPersonal" class="form-control">
        @if (isset($siglas) && count($siglas) > 0)
            <option value="">Seleccione siglas</option>
            @foreach ($siglas as $sigla)
                <option value="{{ $sigla->id }}">{{ $sigla->name . ' - ' . $sigla->knowledge }}</option>
            @endforeach
        @else
            <option value="">No existen siglas</option>
        @endif

    </select>
    @error('idSiglas')
        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
        <span class="text-danger"><em>Es necesario seleccionar unas siglas para continuar con el registro de asistencia.</em></span>
    @enderror

</div> --}}

<!-- Siglas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idSiglas', 'Siglas:') !!}
    <select name="idSiglas" id="idSiglas" class="form-control">
        @if (isset($siglas) && count($siglas) > 0)
            <option value="">Seleccione siglas</option>
            @foreach ($siglas as $sigla)
                <option value="{{ $sigla->id }}">{{ $sigla->name . ' - ' . $sigla->knowledge }}</option>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script>
    // $(function(){
    //     setTimeout(() => {
    //         EsHoy();
    //     }, 1500);


    //     function EsHoy(){
    //         var fecha = new Date();
    //         var mes = fecha.getMonth()+1;
    //         var dia = fecha.getDate();
    //         var ano = fecha.getFullYear();
    //         if(dia < 10){
    //             dia = '0' + dia;
    //         }
    //         if(mes < 10){
    //             mes = '0' + mes;
    //         }
    //         var _hoy = ano + '/' + mes + '/' + dia;
            
    //         document.getElementById('hoy').innerHTML = _hoy;
    //         alert(_hoy);
    //     }
    // });
    
</script>