@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inventarios</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('inventarios.create') }}">
                        Agregar nuevo articulo
                    </a>
                    <a href="{{route('InventariotoPDF')}}" target="blank" class="btn btn-primary float-right mr-2">Mandar a PDF</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('inventarios.table')
        </div>
    </div>

@endsection
