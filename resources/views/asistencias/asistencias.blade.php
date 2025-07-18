@extends('adminlte::page')

@section('content')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}"> --}}
<style>
    .w-1{
        width: 4rem;
    }
    .personal{
        color: chocolate;
    }
</style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Asistencias</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            {!! Form::open(['route' => 'asistencias.personal']) !!}
            {{-- {!! Form::hidden('token', csrf_token() ) !!} --}}

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-4">
                        {!! Form::label('cliente', 'Cientes:') !!}
                        <select name="cliente" id="cliente" class="form-control">
                            @if (isset($clientes) && count($clientes) > 0)
                                <option value="">Seleccione el cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                @endforeach
                            @else
                                <option value="">No existen clientes</option>
                            @endif
                    
                        </select>
                        @error('cliente')
                            <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
                            <span class="text-danger"><em>No se ha seleccionado un cliente o no existe ninguno con personal asignado.</em></span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-4">
                        {!! Form::label('_mes', 'Seleccione el mes:') !!}
                        <select name="_mes" id="_mes" class="form-control" required>
                            <option value="">Seleccione el mes</option>
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                        @error('_mes')
                            <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
                            <span class="text-danger"><em>No se ha seleccionado un mes para registrar asistencias del personal, porfavor verifique.</em></span>
                        @enderror
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <div class="card-header">
                            <div class="h4">Personal por Cliente</div>
                        </div>
                        <div class="card-body p-2">
                            <div class="table-responsive" id="fields">
                                @include('asistencias.form')
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>

            <div class="card-footer">
                {{-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!} --}}
                <a href="#" class="btn btn-info" title="En este momento no se encuentra disponible el poder guardar."> Guardar </a>
                {{-- <a href="{{ route('asistencias.formulario') }}" class="btn btn-default"> Cancelar </a> --}}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/dataTables.js') }}"></script>
<script src="{{ asset('/assets/js/dataTables.buttons.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.dataTables.js') }}"></script>
<script src="{{ asset('/assets/js/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/js/buttons.print.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    $(function(){
        document.getElementById('cliente').addEventListener('change', function(){
            // alert('si entró');
            if(this.value != '')
                ShowFields(this.value);
            else
                document.getElementById('fields').innerHTML = '';
        });
    });
    // function TraerPersonal(id_cliente){
    //     console.log('cliente id= ' + id_cliente);
    //     var result = null;
    //     $.ajax({
    //         cache: false,
    //         async: false,
    //         type: 'post',
    //         data:  $('#'),
    //         url: "{{ route('asistencias.personal') }}",
    //         success: function(responce){
    //             result = responce;
    //         }/*,
    //         error: function(request, error){
    //             result = "Request: " + JSON.stringify(request)
    //             console.log = result + " - Error:" + error;
    //         }*/
    //     });
    //     return result;
    // }

    function ShowFields(idCliente){
        // console.log(idCliente);
        //document.getElementById('fields').innerHTML = idCliente;
        var _divConainer = "<div class='row'></div>";
        var _divColumn = "<div class='col-sm-4'></div>";
        var data = TraerPersonal(idCliente);
        document.getElementById('fields').innerHTML = '';
        document.getElementById('fields').innerHTML = data;
    }
</script>