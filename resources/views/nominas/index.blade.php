@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Nóminas</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">

            {!! Form::open(['route' => 'nominas.generar', 'enctype' => 'multipart/form-data']) !!}

            <div class="card-body p-2">
                <div class="table-responsive">
                    
                    <div class="row p-0 m-0">
                        {{-- <div class="col-sm-12">
                            <h4>Filtros</h4>
                        </div> --}}
                        

                        <div class="form-group col-sm-3">
                            <label for="_fin">Clientes:</label>
                            <a class="btn btn-outline-warning m-1"
                                href="{{ route('clientes.create') }}" target="blank" title="Clic aquí para ir a registrar un nuevo cliente.">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                            <select name="idCliente" id="idCliente" class="form-control">
                                @if (isset($clientes) && count($clientes) > 0)
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente['id']}}">{{$cliente['nombre']}}</option>
                                    @endforeach
                                @else
                                    <option value="">No existen Clientes Registrados</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="_fin">Personal:</label>
                            <a class="btn btn-outline-warning m-1"
                                href="{{ route('personals.create') }}" target="blank" title="Clic aquí para ir a registrar nuevo personal.">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                            <select name="idPersonal" id="idPersonal" class="form-control disabled">
                                @if (isset($personal) && count($persona) > 0)
                                    @foreach ($persona as $persona)
                                        <option value="{{$persona['id']}}">{{$persona['nombre']}}</option>
                                    @endforeach
                                @else
                                    <option value="">No existen Personal asignado para este cliente</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="_inicio">Inicio del periodo:</label>
                            <input type="date" name="_inicio" id="_inicio" class="form-control">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="_fin">Fin del periodo:</label>
                            <input type="date" name="_fin" id="_fin" class="form-control float-left">
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        {{-- <a class="btn btn-primary float-left"
                            href="{{ route('nominas.mostrar') }}">
                            Generar Nóminas
                        </a> --}}
                        <a class="btn btn-primary float-left m-1 col-sm-2"
                            href="#">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            Generar Nóminas
                        </a>
                        <a class="btn btn-primary m-1 col-sm-2"
                            href="{{ route('nominas.recibo') }}" target="blank" id="btnPrint">
                            <i class="fas fa-fw fa-print"></i>
                            Imprimir Recibo
                        </a>
                    </div>

                    


                    {{-- <div class="card-footer">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('nominas.index') }}" class="btn btn-default"> Cancelar </a>
                    </div> --}}
                </div>

                <div class="row p-0 m-0 mt-4" id="print-content">
                    @include('nominas.recibo')
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>

@endsection

<script>
    $({
        document.getElementById()
    });
</script>