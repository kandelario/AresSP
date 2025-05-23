<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personal;
use App\Models\Cliente;
use App\Models\Assignment;
use App\Models\Asistencia;
use App\Models\RazonSocial;

use Illuminate\Support\Facades\DB;

class NominasController extends Controller
{
    public function index()
    {
        $razones_sociales = RazonSocial::all();
        $clientes = Cliente::all();

        

        return view('nominas.index')
        ->with('clientes', $clientes)
        ->with('RazonesSociales', $razones_sociales);
        // $inventarios = $this->inventarioRepository->paginate(10);
        // return view('inventarios.index')
        // ->with('inventarios', $inventarios);
    }

    public function generar(Request $request)
    {
        return "Nóminas Generadas";
        //dd($request);
        // return view('');
        // $inventarios = $this->inventarioRepository->paginate(10);
        // return view('inventarios.index')
        // ->with('inventarios', $inventarios);
    }

    public function mostrar(Request $request)
    {
        return "Nóminas mostradas";
        //dd($request);
        // return view('');
        // $inventarios = $this->inventarioRepository->paginate(10);
        // return view('inventarios.index')
        // ->with('inventarios', $inventarios);
    }

    public function recibo(){
        /*$persona = DB::table('personals')
            ->where('id', $idPersonal)
            ->first();

        $asignacion = DB::table('assignments')
            ->where('id', $idPersonal)
            ->first();*/

        return view('nominas.recibo')
        /*->with('persona', $persona)
        ->with('asignacion', $asignacion)*/;
    }

    public function MisGuardias(Request $request){
        // return $request->id_cliente;
        if($request->id_cliente != null){
            $id_cliente = $request->id_cliente;
            $id_p_asignado = Assignment::where('cliente_id', $id_cliente)->get('personal_id');
            $p_asignado = Personal::wherein('id', $id_p_asignado)->get();
            // $p_asignado = DB::table('assignments')->select('id')->where('cliente_id', $request->id_cliente)->latest();
            return response()->json($p_asignado);
            // return $p_asignado;
            // $personal = DB::table('users')->select('*')->whereIn($p_asignado);
        }else{
            return 'Debe seleccionar un cliente';
        }
        
    }
}
