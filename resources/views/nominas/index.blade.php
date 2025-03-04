@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<style>
    table{
        overflow: hidden;
    }
    .fs-7{
        font-size: 1rem;
    }
    .fs-8{
        font-size: .7rem;
    }
    .fs-9{
        font-size: .4rem;
    }
    .justify-text{
        text-align: justify;
    }
    .carta{
        border: 0;
        margin: 0;
        padding: 0;
        /* font-family: Arial, Helvetica, sans-serif; */
        /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        width: 21.59cm;
        max-width: 21.59cm;
        height: auto;
        /* max-height: 27.94cm; */
        overflow: hidden;
    }
    /* .tr{
        height: auto;
        max-height: 1rem !important;
    }
    .td{
        height: auto;
        max-height: 1rem !important;
    } */
    table{
        border: none;
        padding: 0;
        margin: 0;
        overflow: hidden !important;
        font-size: .6rem;
    }
    tr{
        padding: 0;
        margin: 0;
        height: auto;
        max-height: .5rem;
    }
    td{
        padding: 0;
        margin: 0;
        height: auto;
        max-height: .5rem;
    }
    .logo{
        max-width: 2cm;
        width: auto;
        height: auto;
        max-height: 2cm;
    }
    p{
        font-weight: bold;
    }
    .gris{
        background-color: gray !important;
    }

    
</style>

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

        <div class="card mb-4">

            {!! Form::open(['route' => 'nominas.generar', 'enctype' => 'multipart/form-data']) !!}

            <div class="card-body p-2 mb-4">
                <div class="table-responsive">
                    
                    <div class="row p-0 m-0">
                        {{-- <div class="col-sm-12">
                            <h4>Filtros</h4>
                        </div> --}}
                        
                        <div class="form-group col-sm-4">
                            <label for="_fin">Razón Social:</label>
                            <a class="btn btn-outline-info m-1"
                                href="{{ route('razon-socials.create') }}" target="blank" title="Clic aquí para ir a registrar una nueva razón social.">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                            <select name="razon-social" id="razon-social" class="form-control">
                                @if (isset($RazonesSociales) && count($RazonesSociales) > 0)
                                    <option value="">Seleccione una Razón Social</option>
                                    @foreach ($RazonesSociales as $razon)
                                        <option value="{{$razon['id']}}">{{$razon['razon_nombre']}} <input id="{{ 'rs_' . $razon['id']}}" type="hidden" value="{{ $razon }}"></option>
                                    @endforeach
                                @else
                                    <option value="">No existen Razones Registradas</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="idCliente">Clientes:</label>
                            <a class="btn btn-outline-warning m-1"
                                href="{{ route('clientes.create') }}" target="blank" title="Clic aquí para ir a registrar un nuevo cliente.">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                            <select name="idCliente" id="idCliente" class="form-control">
                                @if (isset($clientes) && count($clientes) > 0)
                                    <option value="">Seleccione un Cliente</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente['id']}}">{{$cliente['nombre']}}</option>
                                    @endforeach
                                @else
                                    <option value="">No existen Clientes Registrados</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="idPersonal">Personal:</label>
                            <a class="btn btn-outline-warning m-1"
                                href="{{ route('personals.create') }}" target="blank" title="Clic aquí para ir a registrar nuevo personal.">
                                <i class="fas fa-fw fa-plus"></i>
                            </a>
                            <select name="idPersonal" id="idPersonal" class="form-control disabled">
                                @if (isset($personal) && count($persona) > 0)
                                    @foreach ($persona as $persona)
                                        <option value="{{$persona['id']}}">{{$persona['nombre']}} <input type="hidden" id="p_{{ $persona->id }}" value="{{ $persona }}"></option>
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
                        <div class="col-sm-12 h3">Datos de la nómina</div>
                        <div class="col-sm-12">
                            <div class="form-group col-sm-3">
                                <label for="sueldo">Sueldo:</label>
                                <input type="number" name="_sueldo" id="_sueldo" class="form-control float-left">
                            </div>
                        </div>
                            

                        <div class="col-sm-12 mt-2">
                            {{-- <a class="btn btn-primary float-left"
                                href="{{ route('nominas.mostrar') }}">
                                Generar Nóminas
                            </a> --}}
                            <a class="btn btn-primary col-sm-2 float-left m-1 unwrap" href="#">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                Generar Nóminas
                            </a>
                            <a class="btn btn-primary  col-sm-2 float-left m-1 " href="{{ route('nominas.recibo') }}" target="blank" id="btnPrint">
                                <i class="fas fa-fw fa-print"></i>
                                Imprimir Recibo
                            </a>
                        </div>

                    </div>
                    {{-- <div class="card-footer">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('nominas.index') }}" class="btn btn-default"> Cancelar </a>
                    </div> --}}
                </div>

                <div class="p-0 m-0 border carta" id="print-content">

                    <table class="table table-responsive col-sm-12">

                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
                        <style>
                            @media print{
                                #header,
                                #footer,
                                #nav {
                                    display: none !important;
                                }
                                .gris{
                                    background-color: gray !important;
                                }
                                .fs-7{
                                    font-size: 1rem;
                                }
                                .fs-8{
                                    font-size: .7rem;
                                }
                                .fs-9{
                                    font-size: .4rem;
                                }
                                .justify-text{
                                    text-align: justify;
                                }
                                .carta{
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    /* font-family: Arial, Helvetica, sans-serif; */
                                    /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
                                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                                    width: 21.59cm;
                                    max-width: 21.59cm;
                                    height: auto;
                                    /* max-height: 27.94cm; */
                                    overflow: hidden;
                                }
                                /* .tr{
                                    height: auto;
                                    max-height: 1rem !important;
                                }
                                .td{
                                    height: auto;
                                    max-height: .5rem !important;
                                } */
                                table{
                                    padding: 0;
                                    margin: 0;
                                    overflow: hidden !important;
                                    font-size: .6rem;
                                }
                                tr{
                                    padding: 0;
                                    margin: 0;
                                    height: auto;
                                    max-height: .6rem !important;
                                }
                                td{
                                    padding: 0;
                                    margin: 0;
                                    height: auto;
                                    max-height: .6rem !important;
                                }
                                .logo{
                                    max-width: 2cm;
                                    width: auto;
                                    height: auto;
                                    max-height: 2cm;
                                }
                                p{
                                    font-weight: bold;
                                }
                                .gris{
                                    background-color: gray !important;
                                }
                                .text-left{
                                    text-align: left !important;
                                }
                                .text-right{
                                    text-align: right !important;
                                }
                            }
                        </style>

                        <thead>
                            <tr class="tr">
                                <th class="text-center border-0 gris" colspan="4">RECIBO DE NÓMINA (MUESTRA)</th>
                            </tr>
                            <tr class="tr"><th colspan="4" class="border-0"></th></tr>
                            <tr class="tr">
                                <th colspan="2" class="text-center border">Empresa</th>
                                <th colspan="2" class="text-center border">Trabajador</th>
                            </tr>
                            <tr class="tr">
                                <td class="col-sm-2 border">Nombre:</td>
                                <td class="text-justify col-sm-4 fw-bold border">Ares Agencia de Seguridad Privada</td>
                                <td class="col-sm-2 border">Nombre:</td>
                                <td class="text-justify col-sm-4 fw-bold border"><p id="p_name" class="m-0 p-0"></p></td>
                            </tr>
                            <tr class="tr">
                                <td class="border text-left">Razón Social:</td>
                                <td class="border text-justify fw-bold"><p id="c_razon" class="m-0 p-0"></p></td>
                                <td class="border">Puesto:</td>
                                <td class="border text-justify fw-bold"><p id="p_puesto" class="m-0 p-0"></p></td>
                            </tr>
                            <tr class="tr">
                                <td class="border text-left">R.F.C.:</td>
                                <td class="border fw-bold"><p id="c_rfc" class="m-0 p-0"></p></th>
                                <td class="border">R.F.C:</td>
                                <td class="border text-justify fw-bold"><p id="p_rfc" class="m-0 p-0"></p></td>
                                
                            </tr>
                            <tr class="tr">
                                <td class="border">Reg. Patronal</td>
                                <td class="border fw-bold"><p id="c_rp" class="m-0 p-0"></p></td>
                                <td class="border">Num. Emp.</td>
                                <td class="border text-justify fw-bold"><p id="p_emp" class="m-0 p-0"></p></td>
                            </tr>
                            <tr class="tr">
                                <td class="border">Dirección:</td>
                                <td class="border fw-bold"><p id="c_direccion" class="m-0 p-0"></p></td>
                                <td class="border">CURP</td>
                                <td class="border fw-bold"><p id="p_curp" class="m-0 p-0"></p></td>
                            </tr>
                            <tr class="tr">
                                <td class="border">Lugar de Serv.:</td>
                                <td class="border fw-bold"></td>
                                <td class="border">IMSS:</td>
                                <td class="border fw-bold"><p id="p_imss" class="m-0 p-0"></p></td>
                            </tr>
                            {{-- <tr>
                                <td class="border" colspan="2"></td>
                                <td class="border">IMSS:</td>
                                <td class="border fw-bold">26408872220</td>
                            </tr> --}}
                            <tr class="tr">
                                <td class="border">Salario Diario</td>
                                <td class="border fw-bold"></td>
                                <td class="border">Salario Mensual</td>
                                <td class="border fw-bold">
                                    <p id="_sueldo_mensual">$0.00</p>
                                    <input type="hidden" name="h_sueldo" id="h_sueldo" value="0.00">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td colspan="4" class="td border-0">
                                    <div class="row">
                                        <div class="col-sm-4 border m-0 p-2"><span class="ml-2">Periodo de liquidación.</span></div>
                                        <div class="col-sm-3 border m-0 p-0 pl-2"><span class="float-left ml-2">Fecha inicial:</span><span class="fw-bold float-end pr-2 fw-bolder" id="pf_inicio"></span></div>
                                        <div class="col-sm-3 border m-0 p-0 pl-2"><span class="float-left ml-2">Fecha final:</span> <span class="fw-bold float-end pr-2 fw-bolder" id="pf_fin"></span></div>
                                        <div class="col-sm-2 border m-0 p-0 pl-2"><span class="float-left ml-2">n° días:</span> <span class="fw-bold float-end pr-2 fw-bolder" id="pf_dias"></span></div>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border-0" colspan="4"></td></tr>
                            <tr>
                                <td colspan="4" class="text-center border gris fw-bold">Percepciones</td>
                            </tr>
                            <tr>
                                <td class="border" colspan="4">
                                    <table class="table fs-8 m-0 p-0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="col-sm-4 text-center">Concepto</td>
                                            <td class="col-sm-4 text-center">Cantidad</td>
                                            <td class="col-sm-4 text-center">Monto</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">Sueldo</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">Bono</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">T. Extra</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">Día Festivo</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr class="tr">
                                            <td height="6" class="col-sm-4 td">Prima Dominical:</td>
                                            <td height="6" class="col-sm-4 td text-center">-</td>
                                            <td height="6" class="col-sm-4 fw-bold td text-left">$</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-right"><p>Sueldo Bruto:</p></td>
                                            <td class="text-left"><p class="">$</p></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center border gris fw-bold">Deducciones</td>
                            </tr>
                            <tr>
                                <td class="border" colspan="4">
                                    <table class="table fs-8 m-0 p-0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="col-sm-4 text-center">Concepto</td>
                                            <td class="col-sm-4 text-center">Cantidad</td>
                                            <td class="col-sm-4 text-center">Monto</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">Inasistencias</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">Retardos</td>
                                            <td class="col-sm-4 text-center">-</td>
                                            <td class="col-sm-4 fw-bold">$</td>
                                        </tr>
                                        <tr style="border-bottom: 1px;">
                                            <td class="col-sm-4 border-0">Desc. Infonavit</td>
                                            <td class="col-sm-4 text-center border-0">-</td>
                                            <td class="col-sm-4 fw-bold border-0">$</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-right"><p>Total de Deducciones:</p></td>
                                            <td class="tet-left"><p class="">$</p></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr><td colspan="4" class="border-0"></td></tr>
                            <td colspan="4" class="text-center border gris fw-bold">Total devengado</td>
                            <tr>
                                <td colspan="4" class="m-0 p-0">
                                    <table class="col-sm-12 fs-8 m-2 p-0">
                                        <tr class="tr">
                                            <td class="td">Sueldo Neto:</td>
                                            <td class="td"></td>
                                            <td class="fw-bold td">$</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr class="border">
                                <td colspan="3" class="m-0 p-0 border">
                                    <p class="justify-text p-2">Recibí de la empresa mencionada la cantidad anotada de percepciones por concepto de mi salario que incluye el importe total de las horas ordinarias, extraordinarias, septimos dias, dias festivos, y demas otras prestaciones correspondientes al periodo que termina hoy sin que a la fecha se me adeude ninguna cantidad por cualquier otro concepto habiendoseme hecho los descuentos de ley y los convenidos particularmente.</p>
                                </td>
                                <td class="text-center" style="border-left: none;">
                                    Firma del trabajador
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- @include('nominas.recibo') --}}
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script>
    var fecha_inicio = '';
    var fecha_fin = '';
    $(function(){
        $('#razon-social').on('change', function(){
            var razon_social = document.getElementById('razon-social').value;
            var c_razon = document.getElementById('c_razon');
            var c_rfc = document.getElementById('c_rfc');
            var c_rp = document.getElementById('c_rp');
            var c_direccion = document.getElementById('c_direccion');
            if(razon_social != ''){
                var json_data = JSON.parse(document.getElementById('rs_' + razon_social).value);
                // console.log(document.getElementById('rs_' + razon_social).value);
                // var razon_seleccionada = document.getElementById('rs_' + razon_social).value;
                json_data.razon_nombre != '' ? c_razon.innerHTML = json_data.razon_nombre : 'No se cuenta con este dato.';
                json_data.razon_rfc != '' ? c_rfc.innerHTML = json_data.razon_rfc : 'No se cuenta con un RFC.';
                json_data.razon_registro_patronal != '' ? c_rp.innerHTML = json_data.razon_registro_patronal : 'No se cuenta con el presente dato.';
                json_data.razon_direccion != '' && json_data.razon_direccion != null ? c_direccion.innerHTML = json_data.razon_direccion : 'No se cuenta con el presente dato.';
            }else{
                c_razon.innerHTML = '';
                c_rfc.innerHTML = '';
                c_rp.innerHTML = '';
                c_direccion.innerHTML = '';
            }
            
        });

        $('#idPersonal').on('change', function(){
            var persona = document.getElementById('razon-social').value;
            var p_name = document.getElementById('p_name');
            var p_puesto = document.getElementById('p_puesto');
            var p_rfc = document.getElementById('p_rfc');
            var p_emp = document.getElementById('p_emp');
            var p_curp = document.getElementById('p_curp');
            var p_imss = document.getElementById('p_imss');

            if(persona != ""){
                var json_data_persona = JSON.parse(document.getElementById('p_' + persona).value);
                console.log(json_data_persona);
                // p_name.innerHTML = '';
                // p_puesto.innerHTML = '';
                // p_rfc.innerHTML = '';
                // p_emp.innerHTML = '';
                // p_curp.innerHTML = '';
                // p_imss.innerHTML = '';
            }else{
                p_name.innerHTML = '';
                p_puesto.innerHTML = '';
                p_rfc.innerHTML = '';
                p_emp.innerHTML = '';
                p_curp.innerHTML = '';
                p_imss.innerHTML = '';
            }
        });
        
        $('#_inicio').on('change', function(){
            var p_f_inicio = document.getElementById('_inicio');
            var pf_inicio = document.getElementById('pf_inicio');
            if(p_f_inicio.value != ''){
                fecha_inicio = p_f_inicio.value;
                pf_inicio.innerHTML = p_f_inicio.value;
            }else{
                pf_inicio.innerHTML = '';
            }
        });
        $('#_fin').on('change', function(){
            var p_f_fin = document.getElementById('_fin');
            var pf_fin = document.getElementById('pf_fin');
            if(p_f_fin.value != ''){
                fecha_fin = p_f_fin.value;
                pf_fin.innerHTML = p_f_fin.value;
                if(fecha_inicio < fecha_fin && (fecha_inicio != '') && (fecha_fin != '')){
                    var resutl = 0;
                    result = DiasTrabajados(fecha_fin, fecha_inicio);
                    document.getElementById('pf_dias').innerHTML = result;
                }else{
                    document.getElementById('pf_dias').innerHTML = 'no fue posible realizar la resta';
                }
            }else{
                pf_fin.innerHTML = '';
            }
        });

        $('#idCliente').on('change', function(){
            var id_cliente = document.getElementById('idCliente');
            var results = '';
            // alert(id_cliente.value);
            $.ajax({
                async: false,
                cache: false,
                url: '/admin/nominas/mis_guardias',
                method: 'GET',
                data: 'id_cliente=' + id_cliente.value,
                success: function(responce){
                    results = responce;
                    console.log(results.length);
                }
            });
            var _personal = '';
            var _p_select = document.getElementById('idPersonal');
            if(results.length >= 1){
                _p_select.innerHTML = "<option value=''>SELECCIONAR PERSONAL</option>";
                results.forEach(function(_personal){
                    _p_select.innerHTML += "<option value='" + _personal.id + "'>" + _personal.name + "</option>";
                });
            }
            
            // alert(results[0].cliente_id);
        });

        $('#_sueldo').on('keyup', function(){
            var _sueldo = document.getElementById('h_sueldo');
            var _sueldo_mensual = document.getElementById('_sueldo_mensual');
            if(this.value != ''){
                _sueldo.value = this.value;
                var _nuevo_sueldo = new Intl.NumberFormat().format(this.value);
                // console.log(_nuevo_sueldo);
                _sueldo_mensual.innerHTML = '$' + _nuevo_sueldo;
            }else{
                _sueldo.value = '0.00';
                _sueldo_mensual.innerHTML = '$0.00';
            }
        });
    });

    function DiasTrabajados(d_fin, d_inicio){
        var fecha1 = new Date(d_inicio);
        var fecha2 = new Date(d_fin);
        var _diff = fecha2.getTime() - fecha1.getTime();
        var _result = (Math.round(_diff / (1000 * 60 * 60 * 24)) + 1);
        return (_result);
    }
</script>

<script>
    // window.print();
$(function() {

    $("#btnPrint").on('click', function() {

    //var nro = $("#print-content").val(); //Nro de Preguntas a imprimir por página

    var objeto = document.getElementById('print-content'); //obtenemos el objeto a imprimir
    var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
    ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
    ventana.document.close(); //cerramos el documento
    ventana.print(); //imprimimos la ventana
    ventana.close(); //cerramos la ventana

    });
});
</script>