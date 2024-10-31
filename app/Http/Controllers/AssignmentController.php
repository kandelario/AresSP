<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssignmentRequest;
use App\Http\Requests\UpdateAssignmentRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AssignmentRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use App\Models\Cliente;
use App\Models\Personal;
use App\Repositories\PersonalRepository;
use Illuminate\Support\Facades\DB;

class AssignmentController extends AppBaseController
{
    /** @var AssignmentRepository $assignmentRepository*/
    private $assignmentRepository;

    public function __construct(AssignmentRepository $assignmentRepo)
    {
        $this->assignmentRepository = $assignmentRepo;
    }

    /**
     * Display a listing of the Assignment.
     */
    public function index(Request $request)
    {
        $assignments = $this->assignmentRepository->paginate(10);
        $personal = Personal::all();
        $clientes = DB::table('clientes')->get();

        $trabajadores_asignados = [];
        foreach($assignments as $assignment){
            foreach($clientes as $cliente){
                foreach($personal as $persona){
                    if($assignment->cliente_id == $cliente->id){
                        if($persona->id ==  $assignment->personal_id){
                            array_push($trabajadores_asignados, ['id' => $assignment->id, 'fecha_inicio_serv' => date($assignment->fecha_inicio_serv), 'puesto' => $assignment->puesto, 'personal_id' => $persona->id, 'persona_name' => $persona->name, 'n_emp' => $persona->n_emp, 'cliente_id' => $cliente->id, 'cliente_name' => $cliente->nombre]);
                        }
                        
                    }
                    
                }
            }
                
        }
        // dd($trabajadores_asignados);
        // return response()->json($trabajadores_asignados);
        return view('assignments.index')
            ->with('trabajadores_asignados', $trabajadores_asignados)
            ->with('assignments', $assignments);
    }

    /**
     * Show the form for creating a new Assignment.
     */
    public function create()
    {
        $clientes = Cliente::all();
        //$personal = Personal::all();
        $personal = Personal::all();
        return view('assignments.create')
        ->with('personals', $personal)
        ->with('clientes', $clientes);
    }

    /**
     * Store a newly created Assignment in storage.
     */
    public function store(CreateAssignmentRequest $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'personal_id' => 'required',
            'fecha_inicio_serv' => 'required',
            'puesto' => 'required',
        ]);
        $input = $request->all();

        $assignment = $this->assignmentRepository->create($input);

        Flash::success('Asignación realizada satisfactoriamente.');

        return redirect(route('assignments.index'));
    }

    /**
     * Display the specified Assignment.
     */
    public function show($id)
    {
        $assignment = $this->assignmentRepository->find($id);
        $personal = Personal::all()->where('id', '=', $assignment->personal_id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('assignments.index'));
        }

        return view('assignments.show')->with('assignment', $assignment);
    }

    /**
     * Show the form for editing the specified Assignment.
     */
    public function edit($id)
    {
        $assignment = $this->assignmentRepository->find($id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('assignments.index'));
        }

        return view('assignments.edit')->with('assignment', $assignment);
    }

    /**
     * Update the specified Assignment in storage.
     */
    public function update($id, UpdateAssignmentRequest $request)
    {
        $assignment = $this->assignmentRepository->find($id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('assignments.index'));
        }

        $assignment = $this->assignmentRepository->update($request->all(), $id);

        Flash::success('Assignment updated successfully.');

        return redirect(route('assignments.index'));
    }

    /**
     * Remove the specified Assignment from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $assignment = $this->assignmentRepository->find($id);

        if (empty($assignment)) {
            Flash::error('Assignment not found');

            return redirect(route('assignments.index'));
        }

        $this->assignmentRepository->delete($id);

        Flash::success('Assignment deleted successfully.');

        return redirect(route('assignments.index'));
    }
}
