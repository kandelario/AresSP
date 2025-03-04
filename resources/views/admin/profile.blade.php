@extends('adminlte::page')

{{-- @section('title', 'Ares SP') --}}

{{-- @dd($user_id) --}}
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/doverman.png') }}">

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <span>Bienvenido a tu perfil {{ Auth::user()->name }}</span>
            <div class="float-right">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-content col-sm-4">
                    <label for="">Nombre:</label>
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="form-content col-sm-4">
                    <label for="">Email:</label>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <div class="form-content col-sm-4">
                    <label for="">Email:</label>
                    <span>{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop