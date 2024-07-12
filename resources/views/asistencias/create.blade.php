@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Registrar Asistencias
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'asistencias.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('asistencias.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('asistencias.index') }}" class="btn btn-default"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
