<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InventarioRepository;
use Illuminate\Http\Request;
use Flash;

class InventarioController extends AppBaseController
{
    /** @var InventarioRepository $inventarioRepository*/
    private $inventarioRepository;

    public function __construct(InventarioRepository $inventarioRepo)
    {
        $this->inventarioRepository = $inventarioRepo;
    }

    /**
     * Display a listing of the Inventario.
     */
    public function index(Request $request)
    {
        $inventarios = $this->inventarioRepository->paginate(10);

        return view('inventarios.index')
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new Inventario.
     */
    public function create()
    {
        return view('inventarios.create');
    }

    /**
     * Store a newly created Inventario in storage.
     */
    public function store(CreateInventarioRequest $request)
    {
        $input = $request->all();

        $inventario = $this->inventarioRepository->create($input);

        Flash::success('Inventario saved successfully.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Display the specified Inventario.
     */
    public function show($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.show')->with('inventario', $inventario);
    }

    /**
     * Show the form for editing the specified Inventario.
     */
    public function edit($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.edit')->with('inventario', $inventario);
    }

    /**
     * Update the specified Inventario in storage.
     */
    public function update($id, UpdateInventarioRequest $request)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $inventario = $this->inventarioRepository->update($request->all(), $id);

        Flash::success('Inventario updated successfully.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Remove the specified Inventario from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $this->inventarioRepository->delete($id);

        Flash::success('Inventario deleted successfully.');

        return redirect(route('inventarios.index'));
    }
}
