<!-- Hoy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoy', 'Fecha:') !!}
    {!! Form::date('hoy', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpersonal Field -->
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

</div> --}}

<!-- Asistio Field -->
<div class="form-group col-sm-6 text-center" style="vertical-align: center !important;">
    {{-- <div class="align-middle border" > --}}
        {{-- Se recibe id del personal a marcar o falta o asistencia --}}
        {{-- @if (isset($personal->id))
            {!! Form::hidden('idPersonal', $personal->id, ['class' => 'form-check-input']) !!}
        @else
            {!! Form::hidden('idPersonal', 0, ['class' => 'form-check-input']) !!}
        @endif

        @if (isset($personal->falto))
            
        @else
            
        @endif --}}
    <div class="form-check">
        {!! Form::hidden('falto', 0, ['class' => 'form-check-input']) !!}
        {!! Form::label('falto', 'Faltó este día'/*, ['class' => 'form-check-label']*/) !!}
        {!! Form::checkbox('falto', '1', null/*, ['class' => 'form-check-input']*/) !!}
    </div>
        

    {{-- </div> --}}
        
</div>

<div class="form-group col-sm-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control','id'=>'hoy', 'style' => 'resize:none']) !!}
</div>