<!-- Hoy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoy', 'Hoy:') !!}
    {!! Form::date('hoy', null, ['class' => 'form-control','id'=>'hoy']) !!}
</div>

<!-- Idpersonal Field -->
<div class="form-group col-sm-6">
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
</div>

<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control','id'=>'hoy']) !!}
</div>

<!-- Asistio Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('falto', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('falto', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('falto', 'Faltó este días', ['class' => 'form-check-label']) !!}
    </div>
</div>