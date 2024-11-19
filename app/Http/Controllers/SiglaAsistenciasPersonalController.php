<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiglaAsistenciasPersonalRequest;
use App\Http\Requests\UpdateSiglaAsistenciasPersonalRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SiglaAsistenciasPersonalRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class SiglaAsistenciasPersonalController extends AppBaseController
{
    /** @var SiglaAsistenciasPersonalRepository $siglaAsistenciasPersonalRepository*/
    private $siglaAsistenciasPersonalRepository;

    public function __construct(SiglaAsistenciasPersonalRepository $siglaAsistenciasPersonalRepo)
    {
        $this->siglaAsistenciasPersonalRepository = $siglaAsistenciasPersonalRepo;
    }

    /**
     * Display a listing of the SiglaAsistenciasPersonal.
     */
    public function index(Request $request)
    {
        $siglaAsistenciasPersonals = $this->siglaAsistenciasPersonalRepository->paginate(10);

        return view('sigla_asistencias_personals.index')
            ->with('siglaAsistenciasPersonals', $siglaAsistenciasPersonals);
    }

    /**
     * Show the form for creating a new SiglaAsistenciasPersonal.
     */
    public function create()
    {
        return view('sigla_asistencias_personals.create');
    }

    /**
     * Store a newly created SiglaAsistenciasPersonal in storage.
     */
    public function store(CreateSiglaAsistenciasPersonalRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'knowledge' => 'required',
        ]);

        $input = $request->all();

        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->create($input);

        Flash::success('Siglas agregadas satisfactoriamente.');

        return redirect(route('sigla-asistencias-personals.index'));
    }

    /**
     * Display the specified SiglaAsistenciasPersonal.
     */
    public function show($id)
    {
        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->find($id);

        if (empty($siglaAsistenciasPersonal)) {
            Flash::error('Sigla Asistencias Personal not found');

            return redirect(route('sigla-asistencias-personals.index'));
        }

        return view('sigla_asistencias_personals.show')->with('siglaAsistenciasPersonal', $siglaAsistenciasPersonal);
    }

    /**
     * Show the form for editing the specified SiglaAsistenciasPersonal.
     */
    public function edit($id)
    {
        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->find($id);

        if (empty($siglaAsistenciasPersonal)) {
            Flash::error('Sigla Asistencias Personal not found');

            return redirect(route('sigla-asistencias-personals.index'));
        }

        return view('sigla_asistencias_personals.edit')->with('siglaAsistenciasPersonal', $siglaAsistenciasPersonal);
    }

    /**
     * Update the specified SiglaAsistenciasPersonal in storage.
     */
    public function update($id, UpdateSiglaAsistenciasPersonalRequest $request)
    {
        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->find($id);

        if (empty($siglaAsistenciasPersonal)) {
            Flash::error('Sigla Asistencias Personal not found');

            return redirect(route('sigla-asistencias-personals.index'));
        }

        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->update($request->all(), $id);

        Flash::success('Sigla Asistencias Personal updated successfully.');

        return redirect(route('sigla-asistencias-personals.index'));
    }

    /**
     * Remove the specified SiglaAsistenciasPersonal from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siglaAsistenciasPersonal = $this->siglaAsistenciasPersonalRepository->find($id);

        if (empty($siglaAsistenciasPersonal)) {
            Flash::error('Sigla Asistencias Personal not found');

            return redirect(route('sigla-asistencias-personals.index'));
        }

        $this->siglaAsistenciasPersonalRepository->delete($id);

        Flash::success('Sigla Asistencias Personal deleted successfully.');

        return redirect(route('sigla-asistencias-personals.index'));
    }
}
