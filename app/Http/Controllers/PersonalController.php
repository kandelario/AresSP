<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PersonalRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PersonalController extends AppBaseController
{
    /** @var PersonalRepository $personalRepository*/
    private $personalRepository;

    public function __construct(PersonalRepository $personalRepo)
    {
        $this->personalRepository = $personalRepo;
    }

    /**
     * Display a listing of the Personal.
     */
    public function index(Request $request)
    {
        $personals = $this->personalRepository->paginate(10);

        return view('personals.index')
            ->with('personals', $personals);
    }

    /**
     * Show the form for creating a new Personal.
     */
    public function create()
    {
        return view('personals.create');
    }

    /**
     * Store a newly created Personal in storage.
     */
    public function store(CreatePersonalRequest $request)
    {
        $input = $request->all();

        $personal = $this->personalRepository->create($input);

        Flash::success('Personal saved successfully.');

        return redirect(route('personals.index'));
    }

    /**
     * Display the specified Personal.
     */
    public function show($id)
    {
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Personal not found');

            return redirect(route('personals.index'));
        }

        return view('personals.show')->with('personal', $personal);
    }

    /**
     * Show the form for editing the specified Personal.
     */
    public function edit($id)
    {
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('No se encontró al personal Personal');

            return redirect(route('personals.index'));
        }

        return view('personals.edit')->with('personal', $personal);
    }

    /**
     * Update the specified Personal in storage.
     */
    public function update($id, UpdatePersonalRequest $request)
    {
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Personal no encontrado');

            return redirect(route('personals.index'));
        }

        // if($request->fecha_cumple == ''){
        //     $request->fecha_cumple = $personal->fecha_cumple;
        // }
        // if($request->fecha_inicio_serv == ''){
        //     $request->fecha_inicio_serv = $personal->fecha_inicio_serv;
        // }

        $personal = $this->personalRepository->update($request->all(), $id);

        Flash::success('Personal actualizado correctamente.');

        return redirect(route('personals.index'));
    }

    /**
     * Remove the specified Personal from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Personal no encontrado');

            return redirect(route('personals.index'));
        }

        $this->personalRepository->delete($id);

        Flash::success('Personal deleted successfully.');

        return redirect(route('personals.index'));
    }
}
