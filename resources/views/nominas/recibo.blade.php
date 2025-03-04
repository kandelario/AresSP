<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<style>
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
        /* font-family: Arial, Helvetica, sans-serif; */
        /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        max-width: 21.59cm;
        width: auto;
        max-height: 27.94cm;
        height: auto;
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
<table class="table table-responsive col-sm-12 carta fs-8 border-0">
    <thead>
        <tr>
            <th class="text-center border gris" colspan="4">RECIBO DE NÓMINA (MUESTRA)</th>
        </tr>
        <tr><th colspan="4" class="border-0"></th></tr>
        <tr>
            <th colspan="2" class="text-center border">Empresa</th>
            <th colspan="2" class="text-center border">Trabajador</th>
        </tr>
        <tr>
            <td class="col-sm-2 border">Nombre:</td>
            <td class="text-justify col-sm-4 fw-bold border">Ares Agencia de Seguridad Privada</td>
            <td class="col-sm-2 border">Nombre:</td>
            <td class="text-justify col-sm-4 fw-bold border"></td>
        </tr>
        <tr>
            <td class="border text-left">Razón Social:</td>
            <td class="border text-justify fw-bold">Adriana Castilla Guzman</td>
            <td class="border">Puesto:</td>
            <td class="border text-justify fw-bold"></td>
        </tr>
        <tr>
            <td class="border text-left">R.F.C.:</td>
            <td class="border fw-bold">CAGX600525DB8</th>
            <td class="border">R.F.C:</td>
            <td class="border text-justify fw-bold"></td>
            
        </tr>
        <tr>
            <td class="border">Reg. Patronal</td>
            <td class="border fw-bold">B4747130101</td>
            <td class="border">Num. Emp.</td>
            <td class="border text-justify fw-bold"></td>
        </tr>
        <tr>
            <td class="border">Periodo:</td>
            <td class="border fw-bold"> - </td>
            <td class="border">CURP</td>
            <td class="border fw-bold"></td>
        </tr>
        <tr>
            <td class="border">Lugar de Serv.:</td>
            <td class="border fw-bold"></td>
            <td class="border">IMSS:</td>
            <td class="border fw-bold"></td>
        </tr>
        {{-- <tr>
            <td class="border" colspan="2"></td>
            <td class="border">IMSS:</td>
            <td class="border fw-bold">26408872220</td>
        </tr> --}}
        <tr>
            <td class="border">Salario Diario</td>
            <td class="border fw-bold">$0.00</td>
            <td class="border">Salario Mensual</td>
            <td class="border fw-bold">$<span id="_sueldo_mensual">0.00</span></td>
        </tr>
        <tr>
            <td>Periodo de liquidación.</td>
            <td>Fecha inicial:</td>
            <td>Fecha final:</td>
            <td>n° días:</td>
        </tr>
    </thead>
    <tbody>
        <tr><td class="border-0" colspan="4"></td></tr>
        <tr>
            <td colspan="4" class="text-center border gris fw-bold">Percepciones</td>
        </tr>
        <tr>
            <td class="border" colspan="4">
                <table class="table fs-8" cellpadding="0" cellspacing="0">
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
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="text-center border gris fw-bold">Deducciones</td>
        </tr>
        <tr>
            <td class="border" colspan="4">
                <table class="table fs-8" cellpadding="0" cellspacing="0">
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
                    <tr>
                        <td class="col-sm-4">Desc. Infonavit</td>
                        <td class="col-sm-4 text-center">-</td>
                        <td class="col-sm-4 fw-bold">$</td>
                    </tr>
                    <tr>
                        <td class="col-sm-4"></td>
                        <td class="col-sm-4 text-center"></td>
                        <td class="col-sm-4 fw-bold"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr><td colspan="4" class="border-0"></td></tr>
        <tr class="border">
            <td colspan="2" class="m-0 p-0 border">
                <p class="justify-text p-2">Recibí de la empresa mencionada la cantidad anotada de percepciones por concepto de mi salario que incluye el importe total de las horas ordinarias, extraordinarias, septimos dias, dias festivos, y demas otras prestaciones correspondientes al periodo que termina hoy sin que a la fecha se me adeude ninguna cantidad por cualquier otro concepto habiendoseme hecho los descuentos de ley y los convenidos particularmente.</p>
            </td>
            <td colspan="2" class="m-0 p-0">
                <table class="col-sm-12 fs-8 m-2 p-0">
                    <tr class="border-bottom">
                        <td class="col-sm-4">Prima Dominical:</td>
                        <td class="col-sm-4"></td>
                        <td class="col-sm-4 fw-bold">$</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td>Total de Percepciones:</td>
                        <td></td>
                        <td class="fw-bold">$</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td>Total de Retenciones:</td>
                        <td></td>
                        <td class="fw-bold">$</td>
                    </tr>
                    <tr class="border-top">
                        <td>Pago Total:</td>
                        <td></td>
                        <td class="fw-bold">$</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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