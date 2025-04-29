<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Inventario;
use App\Models\Personal;
use App\Repositories\InventarioRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

use App\Models\Movimientos;
use PhpParser\Node\Stmt\TryCatch;

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
        $inventario = new Inventario();
        $movimientos = new Movimientos();
        DB::beginTransaction();
        try {
            $inventario->nombre = $request->nombre;
            if($request->hasFile('image')){
                $file = $request->file('image');
                $destiny = 'assets/inventary_imgs/';
                $old_name = str_replace(" ", "_", $request->nombre);
                $fileName = time().'_'.$old_name . '.' . $file->clientExtension();
                $uploadSuccess = $request->file('image')->move($destiny, $fileName);
                $inventario->image = $fileName;
                
            }else{
                $request->request->remove('image');
            }
            $inventario->existencia = $request->existencia;
            $inventario->codigo = $request->codigo;
            $inventario->save();
            DB::commit();
            Flash::success('Salida generada satisfactoriamente.');
            return redirect(route('inventarios.index'));
            
        } catch (\Exception $e) {
            DB::rollback();
            // return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
            Flash::success('Error al intentar registrar el nuevo item. Detalle del error (' . $e->getMessage() . ')');
        }
        

        

        // $inventario = $this->inventarioRepository->create($input);

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
        try{

        }catch(\Exception $e){
            DB::rollback();
            // return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
            Flash::success('Error al intentar registrar el nuevo item. Detalle del error (' . $e->getMessage() . ')');
        }

        $inventario = $this->inventarioRepository->update($request->all(), $id);
        $inventario->nombre = $request->nombre;
        $inventario->existencia = $request->existencia;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $destiny = 'assets/inventary_imgs/';
            $fileName = 'article_image_' . $inventario->id . '.' . $file->clientExtension();
            $uploadSuccess = $request->file('image')->move($destiny, $fileName);
            $inventario->image = $fileName;
            
        }else{
            //$request->remove('image');
        }
        //$inventario->updated_at = ;
        $inventario->save();

        Flash::success('Artículo actualizado correctamente.');

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

    public function inv_export_pdf(){
        $inventario = Inventario::all();
        $pdf = Pdf::loadView('inventarios.topdf', compact('inventario'));
        return $pdf->stream();
    }

    public function salidas(){
        $personal = Personal::all();
        // $items = Inventario::all();
        $items = $this->inventarioRepository->paginate(100);
        return view('inventarios.salidas')
            ->with('personal', $personal)
            ->with('items', $items);
    }
}
