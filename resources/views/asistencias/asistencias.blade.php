@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">
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

            {!! Form::open(['route' => 'asistencias.formulario']) !!}
            {!! Form::hidden('token', csrf_token() ) !!}

            <div class="card-body">
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
                    @error('idSiglas')
                        <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
                        <span class="text-danger"><em>Es necesario seleccionar unas siglas para continuar con el registro de asistencia.</em></span>
                    @enderror
                </div>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <div class="h4">Resultados</div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="fields"></div>
                        </div>
                    </div>
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
    function TraerPersonal(id_cliente){
        console.log('cliente id= ' + id_cliente);
        var result = null;
        $.ajax({
            cache: false,
            async: false,
            type: 'post',
            data:  'id_cliente =' + id_cliente,
            url: 'asistencias/personal',
            // url: "{{ route('asistencias.personal') }}",
            success: function(responce){
                result = responce;
            }/*,
            error: function(request, error){
                result = "Request: " + JSON.stringify(request)
                console.log = result + " - Error:" + error;
            }*/
        });
        return result;
    }

    function ShowFields(idCliente){
        // console.log(idCliente);
        //document.getElementById('fields').innerHTML = idCliente;
        var _divConainer = "<div class='row'></div>";
        var _divColumn = "<div class='col-sm-4'></div>";
        // var data = TraerPersonal(idCliente);
        document.getElementById('fields').innerHTML = '';
        // document.getElementById('fields').innerHTML = data;
    }
</script>