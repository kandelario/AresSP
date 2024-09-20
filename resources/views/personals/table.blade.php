<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="{{ asset('/assets/css/dataTables.dataTables.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.css') }}">

<div class="card-body p-2">
    <div class="table-responsive">
        <table class="display nowrap table table-striped text-center" id="personals-table">
            <thead>
            <tr>
                <th class="text-center">N° Emp</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Nombre</th>
                {{-- <th class="text-center">Domicilio</th>
                <th class="text-center">Teléfonos</th>
                <th class="text-center">Teléfono Contacto</th>
                <th class="text-center">Email</th> --}}
                <th class="text-center">Fecha Cumpleaños</th>
                <th class="text-center">Fecha Inicio Serv</th>
                {{-- <th class="text-center">Solicitud</th>
                <th class="text-center">Check List Ingreso</th>
                <th class="text-center">Carta Compromiso</th>
                <th class="text-center">Resguardo</th>
                <th class="text-center">Contrato</th>
                <th class="text-center">Retención</th>
                <th class="text-center">Renuncia</th>
                <th class="text-center">Actas Administrativas</th>
                <th class="text-center">Honorarios</th>
                <th class="text-center">Identificacion Oficial</th>
                <th class="text-center">Acta Nacimiento</th>
                <th class="text-center">CURP</th>
                <th class="text-center">CURP Doc</th>
                <th class="text-center">RFC</th>
                <th class="text-center">RFC Doc</th>
                <th class="text-center">NSS</th>
                <th class="text-center">NSS Doc</th>
                <th class="text-center">Comprobante Domicilio</th>
                <th class="text-center">Comprobante Estudios</th>
                <th class="text-center">Recomendaciones</th>
                <th class="text-center">Recomendación Doc.</th>
                <th class="text-center">Certificado Medico</th>
                <th class="text-center">Antecedentes No Penales</th>
                <th class="text-center">Cartilla</th> --}}
                <th class="text-center">Activo</th>
                {{-- <th class="text-center">Otro Doc. Nombre</th>
                <th class="text-center">Otro Doc.</th> --}}

                {{-- <th class="text-center">EPP Pantalon (cantidad)</th>
                <th class="text-center">EPP Pantalon Talla</th>
                <th class="text-center">EPP Camisola (cantidad)</th>
                <th class="text-center">EPP Camisola Talla</th>
                <th class="text-center">EPP Gorra (cantidad)</th>
                <th class="text-center">EPP Gorra Talla</th>
                <th class="text-center">EPP Fornitura (cantidad)</th>
                <th class="text-center">EPP Fornitura Talla</th>
                <th class="text-center">EPP Gas (cantidad)</th>
                <th class="text-center">EPP Pr24 (cantidad)</th>
                <th class="text-center">EPP Credencial (cantidad)</th>
                <th class="text-center">EPP Chamarra (cantidad)</th>
                <th class="text-center">EPP Chamarra Talla</th>
                <th class="text-center">EPP Chaleco (cantidad)</th>
                <th class="text-center">EPP Chaleco Talla</th>
                <th class="text-center">EPP Coipa (cantidad)</th>
                <th class="text-center">EPP Guantes (cantidad)</th>
                <th class="text-center">EPP Guantes Talla</th>
                <th class="text-center">EPP Lampara (cantidad)</th>
                <th class="text-center">EPP Cubrebocas (cantidad)</th>
                <th class="text-center">EPP Tapones (cantidad)</th>
                <th class="text-center">EPP Lentes (cantidad)</th> --}}
                {{-- <th class="text-center">Observaciones</th> --}}
                
                <th class="text-center">Acción</th>
            </tr>
            </thead>
            <tbody class="text-uppercase">
            @foreach($personals as $personal)
                <tr>
                    <td class="text-center">{{ $personal->n_emp }}</td>
                    <td class="text-center">
                        
                        @if ($personal->foto != null)
                            @if (file_exists('assets/personal/' . $personal->foto))
                                <img src="{{ asset('assets/personal/' . $personal->foto) }}" alt="{{ $personal->name }}" style="width: auto; heigth: auto; max-width: 150px; max-heigth: 150px; min-width:100px; min-heigth: 100px; border-radius:80px;">
                            @else
                                <img src="{{ asset('assets/personal/SVG/p_default_2.svg') }}" alt="Sin imagen encontrada para esta persona." style="width: auto; heigth: auto; max-width: 150px; max-heigth: 150px; min-width:100px; min-heigth: 100px;">
                            @endif
                            
                        @else
                            <img src="{{ asset('assets/personal/SVG/p_default_2.svg') }}" alt="Sin imagen encontrada para esta persona." style="width: auto; heigth: auto; max-width: 150px; max-heigth: 150px; min-width:100px; min-heigth: 100px;">
                        @endif

                        {{-- @if ($personal->foto != null)
                            @if (file_exists('assets/personal/' . $personal->foto))
                                <img src="{{ assets('assets/personal/' . $personal->foto) }}" alt="{{ $personal->name }}" width="200">
                            @else
                                <img src="{{ assets('assets/personal/svg/p_default.svg') }}" alt="Sin imagen encontrada para esta persona." width="200">    
                            @endif
                        @else
                            <img src="{{ assets('assets/personal/svg/p_default.svg') }}" alt="Sin imagen encontrada para esta persona." width="200">
                        @endif --}}
                    </td>
                    <td class="text-center">{{ $personal->name }}</td>
                    {{-- <td class="text-center">{{ $personal->domicilio }}</td>
                    <td class="text-center">{{ $personal->telefonos }}</td> --}}
                    {{-- <td class="text-center">
                        @if (isset($personal->telefono_contacto))
                            {{ $personal->telefono_contacto }}    
                        @else
                            {{'N/A'}}
                        @endif
                    </td> --}}
                    {{-- <td class="text-center">{{ $personal->email }}</td> --}}
                    <td class="text-center">{{ substr($personal->fecha_cumple, 0, 10) }}</td>
                    <td class="text-center">{{ substr($personal->fecha_inicio_serv, 0, 10) }}</td>
                    {{-- <td class="text-center">
                        @if ($personal->solicitud == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td> --}}
                    {{-- <td class="text-center">
                        @if ($personal->check_list_ingreso == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->carta_compromiso == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->resguardo == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->contrato == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->retencion == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->renuncia == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->actas_administrativas == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->honorarios == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->identificacion_oficial == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->acta_nacimiento == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->curp }}</td>
                    <td class="text-center">
                        @if ($personal->curp_doc == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->rfc }}</td>
                    <td class="text-center">
                        @if ($personal->rfc_doc == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->nss }}</td>
                    <td class="text-center">
                        @if ($personal->nss_doc == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->comprobante_domicilio == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->comprobante_estudios == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->recomendaciones }}</td>
                    <td class="text-center">
                        @if ($personal->recomendacion_doc == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->certificado_medico == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->antecedentes_no_penales == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->cartilla == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td> --}}
                    <td class="text-center">
                        @if ($personal->enable == 1)
                            {{ 'Personal Activo' }}
                        @else
                            {{ 'Personal Inactivo' }}
                        @endif
                    </td>
                    {{-- <td class="text-center">
                        @if ($personal->otro_doc_nombre != '')
                            {{ $personal->otro_doc_nombre }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($personal->otro_doc == 1)
                            {{ 'Sí' }}
                        @else
                            {{ 'No' }}
                        @endif
                    </td> --}}
                    {{-- <td class="text-center">{{ $personal->epp_pantalon_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_pantalon_talla != '')
                            {{ $personal->epp_pantalon_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_camisola_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_camisola_talla != '')
                            {{ $personal->epp_camisola_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_gorra_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_gorra_talla != '')
                            {{ $personal->epp_gorra_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_fornitura_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_fornitura_talla != '')
                            {{ $personal->epp_fornitura_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_gas_n }}</td>
                    <td class="text-center">{{ $personal->epp_pr24_n }}</td>
                    <td class="text-center">{{ $personal->epp_credencial_n }}</td>
                    <td class="text-center">{{ $personal->epp_chamarra_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_chamarra_talla != '')
                            {{ $personal->epp_chamarra_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_chaleco_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_chaleco_talla != '')
                            {{ $personal->epp_chaleco_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_coipa_n }}</td>
                    <td class="text-center">{{ $personal->epp_guantes_n }}</td>
                    <td class="text-center">
                        @if ($personal->epp_guantes_talla != '')
                            {{ $personal->epp_guantes_talla }}
                        @else
                            {{ 'N/A' }}
                        @endif
                    </td>
                    <td class="text-center">{{ $personal->epp_lampara_n }}</td>
                    <td class="text-center">{{ $personal->epp_cubrebocas_n }}</td>
                    <td class="text-center">{{ $personal->epp_tapones_n }}</td>
                    <td class="text-center">{{ $personal->epp_lentes_n }}</td> --}}

                    {{-- <td class="text-center">{{ $personal->observaciones }}</td> --}}
                    
                    <td class="text-center" style="width: 120px">
                        {!! Form::open(['route' => ['personals.destroy', $personal->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('personals.show', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('personals.edit', [$personal->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $personals])
        </div>
    </div>
</div>

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

    new DataTable('#personals-table', {
    layout: {
        topStart: {
            buttons: [
                // 'copy',
                // 'csv',
                'excel',
                // 'pdf',
                'print'
            ]
        }
    },
    paginate: false,
    select: true
});
</script>