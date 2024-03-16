<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Nombre completo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-3">
    {!! Form::label('email', 'Correo electrónico:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-3">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('email_verified_at', 'Email Verified At:') !!} --}}
    {!! Form::hidden('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datepicker()
    </script>
@endpush



<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('remember_token', 'Remember Token:') !!} --}}
    {!! Form::hidden('remember_token', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>