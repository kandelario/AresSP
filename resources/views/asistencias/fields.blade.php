<!-- Hoy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoy', 'Hoy:') !!}
    {!! Form::date('hoy', null, ['class' => 'form-control','id'=>'hoy']) !!}
</div>

<!-- Idpersonal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPersonal', 'Personal:') !!}
    <select name="idPersonal" id="idPersonal" class="form-control">
        @if (isset($personals))
            @foreach ($personals as $personal)
                <option value="{{$personal['id']}}">{{$personal['name']}}</option>
            @endforeach
        @else
            <option value="">No existe Personal</option>
        @endif
    </select>
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#hoy').datepicker()
    </script>
@endpush

<!-- Puesto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puesto', 'Puesto:') !!}
    {!! Form::text('puesto', null, ['class' => 'form-control','id'=>'hoy']) !!}
</div>

<!-- Asistio Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('asistio', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('asistio', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('asistio', 'Asistio', ['class' => 'form-check-label']) !!}
    </div>
</div>