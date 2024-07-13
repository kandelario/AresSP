{{-- @extends('layout.app') --}}
{{-- {{dd($inventario)}} --}}
<div class="table-responsive">
    <table class="display nowrap table table-striped text-center col-sm-12 border w-100" id="inventarios-table">
        <thead>
            <tr>
                <th colspan="4" align="center"><h2>Reporte Inventario de Materiales</h2></th>
            </tr>
            <tr>
                <th class="text-center" style="width: 4.5cm; border: 1px #000">Nombre</th>
                <th class="text-center" style="width: 4.5cm; border: 1px #000">Existencia</th>
                <th class="text-center" style="width: 4.5cm; border: 1px #000">Imagen</th>
                <th class="text-center" style="width: 4.5cm; border: 1px #000">Fecha de modificación</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($inventario as $invent)
                <tr>
                    <td class="text-center" style="width: 4.5cm;" align="center">{{ $invent->nombre }}</td>
                    <td class="text-center" style="width: 4.5cm;" align="center">{{ $invent->existencia }}</td>
                    <td class="text-center" style="width: 4.5cm;" align="center">
                        @if($invent->image)
                            <center><img src="{{asset('assets/inventary_imgs/' . $invent->image)}}" alt="" style="width: auto; height: auto;max-width: 4cm; max-height: 2cm;"></center>
                        @else
                            <center><img src="{{asset('assets/inventary_imgs/default.webp')}}" alt="" style="width: auto; height: auto;max-width: 4cm; max-height: 2cm;"></center>
                        @endif
                        {{-- {{ if($inventario->image){asset('assets/inventary_imgs/' . $inventario->image)}else{asset('assets/inventary_imgs/default.webp')} }}--}}
                    </td> 
                    <td class="text-center" style="width: 4.5cm; border: 1px #000; align:center" align="center">
                        <p class="text-center">{{$invent->updated_at}}</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>