<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsistenciaRequest;
use App\Http\Requests\UpdateAsistenciaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AsistenciaRepository;
use App\Models\SiglaAsistenciasPersonal;
use App\Models\Asistencia;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use App\Repositories\PersonalRepository;
use App\Models\Personal;
use App\Models\Cliente;

use Illuminate\Support\Facades\DB;

class AsistenciaController extends AppBaseController
{
    /** @var AsistenciaRepository $asistenciaRepository*/
    private $asistenciaRepository;
    private $PersonalRepository;

    public function __construct(AsistenciaRepository $asistenciaRepo)
    {
        $this->asistenciaRepository = $asistenciaRepo;
    }

    /**
     * Display a listing of the Asistencia.
     */
    public function index(Request $request)
    {
        $asistencias = $this->asistenciaRepository->paginate(10);
        $asignaciones = Assignment::all();
        // $asistencias = Asistencia::all();

         $personals = Personal::all();
        //$personals = $this->PersonalRepository->paginate(100);
        $clientes = Cliente::all();
        $siglas = SiglaAsistenciasPersonal::all();

        return view('asistencias.index')
            ->with('asistencias', $asistencias)
            ->with('personals', $personals)
            ->with('asignaciones', $asignaciones)
            ->with('clientes', $clientes)
            ->with('siglas', $siglas);
    }

    /**
     * Show the form for creating a new Asistencia.
     */
    public function create()
    {
        $siglas = SiglaAsistenciasPersonal::all();
        // $personals = DB::table('asistencias')->get();
        $clientes = Cliente::all();
        $personals = Personal::all();
        $asignments = DB::table('assignments')->get();
        return view('asistencias.create')
        ->with('clientes', $clientes)
        ->with('personals', $personals)
        ->with('asignments', $asignments)
        ->with('siglas', $siglas);
    }

    /**
     * Store a newly created Asistencia in storage.
     */
    public function store(CreateAsistenciaRequest $request)
    {
        $request->validate([
            'hoy' => 'required',
            'idPersonal' => 'required',
            'idSiglas' => 'required'
        ]);
        // dd($request);
        
        // $input = $request->all();
        // $asistencia = $this->asistenciaRepository->create($input);
        Asistencia::create([
            'hoy' => $request->input('hoy'),
            'idPersonal' => $request->input('idPersonal'),
            'idSiglas' => $request->input('idSiglas')
        ]);

        Flash::success('Asistencia saved successfully.');

        return redirect(route('asistencias.index'));
    }

    public function set(Request $request){
        $lista = "";
        foreach($request as $key => $value){
            if($lista == ""){
                $lista = $$request[$key] . " = " . $value;
            }else{
                $lista .= "; " . $request[$key] . " = " . $value;
            }
            
        }
    }

    /**
     * Display the specified Asistencia.
     */
    public function show($id)
    {
        $asistencia = $this->asistenciaRepository->find($id);

        if (empty($asistencia)) {
            Flash::error('Asistencia not found');

            return redirect(route('asistencias.index'));
        }

        return view('asistencias.show')->with('asistencia', $asistencia);
    }

    /**
     * Show the form for editing the specified Asistencia.
     */
    public function edit($id)
    {
        $asistencia = $this->asistenciaRepository->find($id);
        $personals = Personal::all();
        $clientes = Cliente::all();
        $asignaciones = Assignment::all();
        $siglas = SiglaAsistenciasPersonal::all();
        if (empty($asistencia)) {
            Flash::error('Asistencia not found');

            return redirect(route('asistencias.index'));
        }

        return view('asistencias.edit')
        ->with('asistencia', $asistencia)
        ->with('personals', $personals)
        ->with('clientes', $clientes)
        ->with('asignaciones', $asignaciones)
        ->with('siglas', $siglas);
    }

    /**
     * Update the specified Asistencia in storage.
     */
    public function update($id, UpdateAsistenciaRequest $request)
    {
        $asistencia = $this->asistenciaRepository->find($id);

        if (empty($asistencia)) {
            Flash::error('Asistencia not found');

            return redirect(route('asistencias.index'));
        }

        $asistencia = $this->asistenciaRepository->update($request->all(), $id);

        Flash::success('Asistencia updated successfully.');

        return redirect(route('asistencias.index'));
    }

    /**
     * Remove the specified Asistencia from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asistencia = $this->asistenciaRepository->find($id);

        if (empty($asistencia)) {
            Flash::error('Asistencia not found');

            return redirect(route('asistencias.index'));
        }

        $this->asistenciaRepository->delete($id);

        Flash::success('Asistencia deleted successfully.');

        return redirect(route('asistencias.index'));
    }

    public function asistencias(){
        $personal = Personal::all();
        $clientes = Cliente::all();
        $siglas = SiglaAsistenciasPersonal::pluck('name', 'id');
        $asignaciones = Assignment::select('assignments.id', 'assignments.fecha_inicio_serv', 'assignments.enable', 'assignments.puesto', 
            'assignments.cliente_id', 'assignments.personal_id', 'personals.name', 'personals.n_emp', 'clientes.nombre')
            ->join('personals', 'personals.id', '=', 'assignments.personal_id')
            ->join('clientes', 'clientes.id', '=', 'assignments.cliente_id')->get();
        // return $asignaciones;

        return view('asistencias.asistencias')
            ->with('personal', $personal)
            ->with('clientes', $clientes)
            ->with('asignaciones', $asignaciones)
            ->with('siglas', $siglas);
    }

    public function getpersonal(Request $request){
        // dd($request);
        $asignados = DB::table('assignments')->get()->where('cliente_id', '=', $request->id_cliente);
        return $asignados;
    }
}
