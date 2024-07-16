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
                        <div class="col-sm-12">
                            <h4>Filtros</h4>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="_inicio">Fecha inicio:</label>
                            <input type="date" name="_inicio" id="_inicio" class="form-control">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="_fin">Fecha fin:</label>
                            <input type="date" name="_fin" id="_fin" class="form-control">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="_fin">Personal:</label>
                            <select name="idPersonal" id="idPersonal" class="form-control">
                                @if (isset($clientes) && count($clientes) > 0)
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente['id']}}">{{$cliente['nombre']}}</option>
                                    @endforeach
                                @else
                                    <option value="">No existen Clientes</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-sm-6">
                            <a class="btn btn-primary float-left"
                               href="{{ route('nominas.mostrar') }}">
                               Generar Nóminas
                            </a>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-sm-6">
                            <a class="btn btn-primary float-left"
                               href="{{ route('nominas.recibo') }}">
                               Recibo
                            </a>
                        </div>
                    </div>

                    <div class="container">

                    </div>


                    <div class="card-footer">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('nominas.index') }}" class="btn btn-default"> Cancelar </a>
                    </div>
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>

@endsection

<script>

</script>