@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Almacén > Salidas</h1>
                </div>
            </div>
        </div>
    </section>


    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'inventarios.store', 'enctype' => 'multipart/form-data']) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Nombre Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nombre', 'Nombre del personal:') !!}
                        <select name="nombre" id="nombre" class="form-control">
                            @if (isset($personals))
                                @foreach ($personals as $personal)
                                    <option value="{{$personal['id']}}">{{$personal['name']}}</option>
                                @endforeach
                            @else
                                <option value="">No existe Personal</option>
                            @endif
                        </select>
                    </div>
    
                    <!-- Existencia Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('item', 'Item:') !!}
                        <select name="item" id="item" class="form-control">
                            @if (isset($items))
                                @foreach ($items as $item)
                                    <option value="{{$item['id']}}">
                                        {{$item['nombre']}}
                                        @if($item->image)
                                            <img src="{{asset('assets/inventary_imgs/' . $item->image)}}" alt="" style="width: auto; height: auto;max-width: 20px; max-height: 20px;">
                                        @else
                                            <img src="{{asset('assets/inventary_imgs/default.webp')}}" alt="" style="width: auto; height: auto;max-width: 20px; max-height: 20px;">
                                        @endif
                                    </option>
                                @endforeach
                            @else
                                <option value="">No existen materiales registrados en el almacén</option>
                            @endif
                        </select>
                    </div>
    
                    <!-- password Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('cantidad', 'Cantidad de salida:') !!}
                        {!! Form::number('cantidad', 0, ['class' => 'form-control file', 'min' => '1', 'max' => '80']) !!}
                    </div>
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit(' Registrar ', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('inventarios.index') }}" class="btn btn-default"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    
@endsection