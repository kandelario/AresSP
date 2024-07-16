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
use App\Models\Movimientos;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

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
        // $usuario = Auth::user();
        $movimientos = $this->movimientosRepository->paginate(10);
        $usuarios = DB::table('users')->get();
        $inventarios = DB::table('inventarios')->get();
        // $inventarios = $this->InventarioRepository->paginate(100);;

        return view('movimientos.index')
            ->with('movimientos', $movimientos)
            ->with('usuarios', $usuarios)
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new Movimientos.
     */
    public function create()
    {
        $usuario = Auth::user();
        // $inventarios = DB::table('inventarios')->get();
        $inventario = DB::table('inventarios')->get();
        return view('movimientos.create')
            ->with('inventarios', $inventario)
            ->with('usuario', $usuario);
    }

    /**
     * Store a newly created Movimientos in storage.
     */
    public function store(CreateMovimientosRequest $request)
    {
        // $input = $request->all();

        $validate = Validator::make($request->all(),[
            'entrada' => 'required', 
            'salida' => 'required', 
            'itemID' => 'required',
            'userID' => 'required'
        ]);
        if ($validate->fails()) return response()->json(['success'=>false, 'message'=>$validate->errors()->all()]);
        
        DB::beginTransaction();
        try{

            $newMov = new Movimientos();
            $newMov->entrada = $request->entrada;
            $newMov->salida = $request->salida;
            $newMov->itemID = $request->itemID;
            $newMov->userID = $request->userID;
            $newMov->save();

            $item = Inventario::find($request->itemID);
            $resta = $item->existencia - $request->salida;
            $item->existencia = $resta;
            $item->save();

            DB::commit();
            //return response()->json(['success'=>true,'message'=>'All right to make User!']);
            Flash::success('Salida generada satisfactoriamente.');
            return redirect(route('movimientos.index'));

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
        }



        // $item = DB::table('inventarios')->where('id', '=', $request->itemID);
        
        // $movimientos = $this->movimientosRepository->create($input);

        
    }

    /**
     * Display the specified Movimientos.
     */
    public function show($id)
    {
        $movimientos = $this->movimientosRepository->find($id);
        $inventarios = DB::table('inventarios')->get();
        $usuarios = DB::table('users')->get();

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.show')
            ->with('movimientos', $movimientos)
            ->with('inventarios', $inventarios)
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Movimientos.
     */
    public function edit($id)
    {
        $movimientos = $this->movimientosRepository->find($id);
        $inventarios = DB::table('inventarios')->get();

        if (empty($movimientos)) {
            Flash::error('Movimientos not found');

            return redirect(route('movimientos.index'));
        }

        return view('movimientos.edit')
            ->with('movimientos', $movimientos)
            ->with('inventarios', $inventarios);
    }

    /**
     * Update the specified Movimientos in storage.
     */
    public function update($id, UpdateMovimientosRequest $request)
    {
        $movimientos = $this->movimientosRepository->find($id);
        
        if (empty($movimientos)) {
            Flash::error('Salida no encontrada');

            return redirect(route('movimientos.index'));
        }
        /*DB::beginTransaction();
        try {
            $item = Inventario::find($request->itemID);
        
            if($movimientos->salida < $request->salida){
                $suma = $item->existencia - $request->salida;
                $item->existencia = $suma;
                $item->save();
            }

            DB::commit();
            Flash::success('Salida generada satisfactoriamente.');
            return redirect(route('movimientos.index'));
        } catch (\Throwable $th) {
            
        }*/
        $movimientos = $this->movimientosRepository->update($request->all(), $id);

        Flash::success('Salida actualizada con éxito.');

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
