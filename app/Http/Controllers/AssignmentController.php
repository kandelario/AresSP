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

        return view('assignments.index')
            ->with('assignments', $assignments);
    }

    /**
     * Show the form for creating a new Assignment.
     */
    public function create()
    {
        $clientes = cliente::all();
        //$personal = Personal::all();
        $personal = Personal::where('name', )->get();
        return view('assignments.create', compact('clientes'))
        ->with('personals', $personal);
    }

    /**
     * Store a newly created Assignment in storage.
     */
    public function store(CreateAssignmentRequest $request)
    {
        $input = $request->all();

        $assignment = $this->assignmentRepository->create($input);

        Flash::success('Assignment saved successfully.');

        return redirect(route('assignments.index'));
    }

    /**
     * Display the specified Assignment.
     */
    public function show($id)
    {
        $assignment = $this->assignmentRepository->find($id);

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
