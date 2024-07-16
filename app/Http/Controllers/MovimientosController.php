<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovimientosRequest;
use App\Http\Requests\UpdateMovimientosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MovimientosRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

use App\Models\Personal;
use App\Models\Inventario;

class MovimientosController extends AppBaseController
{
    /** @var MovimientosRepository $movimientosRepository*/
    private $movimientosRepository;

    public function __construct(MovimientosRepository $movimientosRepo)
    {
        $this->movimientosRepository = $movimientosRepo;
    }

    /**
     * Display a listing of the Movimientos.
     */
    public function index(Request $request)
    {
        $movimientos = $this->movimientosRepository->paginate(10);
        $personal = Personal::all();
        $inventarios = DB::table('inventarios')->get();
        // $inventarios = $this->InventarioRepository->paginate(100);;

        return view('movimientos.index')
            ->with('movimientos', $movimientos)
            ->with('personal', $personal)
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new Movimientos.
     */
    public function create()
    {
        // $inventarios = DB::table('inventarios')->get();
        $inventario = Inventario::all();
        return view('movimientos.create')->with('inventarios', $inventario);
    }

    /**
     * Store a newly created Movimientos in storage.
     */
    public function store(CreateMovimientosRequest $request)
    {
        $input = $request->all();

        $movimientos = $this->movimientosRepository->create($input);

        Flash::success('Movimientos saved successfully.');

        return redirect(route('movimientos.index'));
    }

    /**
     * Display the specified Movimientos.
     */
    public function show($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.show')->with('movimientos', $movimientos);
    }

    /**
     * Show the form for editing the specified Movimientos.
     */
    public function edit($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.edit')->with('movimientos', $movimientos);
    }

    /**
     * Update the specified Movimientos in storage.
     */
    public function update($id, UpdateMovimientosRequest $request)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        $movimientos = $this->movimientosRepository->update($request->all(), $id);

        Flash::success('Movimientos updated successfully.');

        return redirect(route('movimientos.index'));
    }

    /**
     * Remove the specified Movimientos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movimientos = $this->movimientosRepository->find($id);

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        $this->movimientosRepository->delete($id);

        Flash::success('Movimientos deleted successfully.');

        return redirect(route('movimientos.index'));
    }
}
