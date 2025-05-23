@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Asignar Personal a Cliente
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        {{-- @include('adminlte-templates::common.errors') --}}

        <div class="card">

            {!! Form::open(['route' => 'assignments.store']) !!}

            <div class="card-body">
                <div class="row">
                    @include('assignments.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('assignments.index') }}" class="btn btn-default"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>