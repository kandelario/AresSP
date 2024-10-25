@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Personal</h1>
                </div>
                <div class="col-sm-6">
                    {{-- <a href="{{route('PersonaltoPDF')}}" class="btn btn-primary float-right ml-2">Mandar a PDF</a> --}}
                    <a class="btn btn-primary float-right"
                       href="{{ route('personals.create') }}">
                        Nuevo Personal
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('personals.table')
        </div>
    </div>

@endsection
