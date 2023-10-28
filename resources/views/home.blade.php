@extends('adminlte::page')

{{-- @section('title', 'AdminLTE') --}}
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/doverman.png') }}">

@section('content_header')
    <h1 class="m-0 text-dark">Home</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop
