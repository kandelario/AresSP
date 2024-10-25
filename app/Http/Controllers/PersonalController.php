<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Personal;
use App\Repositories\PersonalRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\JsonResponse;
use Exception;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Validator;

use App\Models\Asistencia;

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
        DB::beginTransaction();
        try {
            //$input = $request->all();
            $personal = new Personal();

            $personal->n_emp = $request->n_emp;
            $personal->name = $request->name;
            $personal->domicilio = $request->domicilio;
            $personal->telefonos = $request->telefonos;
            $personal->telefono_contacto = $request->telefono_contacto;
            $personal->email = $request->email;
            $personal->fecha_cumple = $request->fecha_cumple;
            $personal->fecha_inicio_serv = $request->fecha_inicio_serv;
            $personal->solicitud = $request->solicitud;
            $personal->check_list_ingreso = $request->check_list_ingreso;
            $personal->carta_compromiso = $request->carta_compromiso;
            $personal->resguardo = $request->resguardo;
            $personal->contrato = $request->contrato;

            $personal->retencion = $request->retencion;
            $personal->renuncia = $request->renuncia;
            $personal->actas_administrativas = $request->actas_administrativas;
            $personal->honorarios = $request->honorarios;
            $personal->identificacion_oficial = $request->identificacion_oficial;
            $personal->acta_nacimiento = $request->acta_nacimiento;
            $personal->curp = $request->curp;
            $personal->curp_doc = $request->curp_doc;
            $personal->rfc = $request->rfc;
            $personal->rfc_doc = $request->rfc_doc;
            $personal->nss = $request->nss;
            $personal->nss_doc = $request->nss_doc;
            $personal->comprobante_domicilio = $request->comprobante_domicilio;
            $personal->comprobante_estudios = $request->comprobante_estudios;
            $personal->recomendaciones = $request->recomendaciones;
            $personal->recomendacion_doc = $request->recomendacion_doc;
            $personal->certificado_medico = $request->certificado_medico;
            $personal->antecedentes_no_penales = $request->antecedentes_no_penales;
            $personal->enable = $request->enable;
            $personal->otro_doc_nombre = $request->otro_doc_nombre;
            $personal->otro_doc = $request->otro_doc;
            $personal->observaciones = $request->observaciones;
            $personal->const_sit_fiscal_doc = $request->const_sit_fiscal_doc;
            
            //método para guardar la fotografía del personal a registrar.
            if($request->hasFile('foto')){
                $file = $request->file('foto');
                $destiny = 'assets/personal/';
                $pName = str_replace(' ', '_', $request->name);
                $fileName = 'p_' . $pName . '.' . $file->clientExtension();
                $uploadSuccess = $request->file('foto')->move($destiny, $fileName);
                $personal->foto = $fileName;
                $personal->save();
                Flash::success('Personal registrado satisfactoriamente.');
            }else{
                //$request->remove('foto');
                $personal->save();
                Flash::success('Personal registrado satisfactoriamente, sin embargo, la imagen no pudo guardarse, comuniquese con el administrador del sitio.');
            }
            DB::commit();
            return redirect(route('personals.index'));

        } catch (Exception $e) {
            DB::rollback();
            $message = $e->getMessage();
            var_dump('Mensaje de error: '. $message);

            $code = $e->getCode();       
            var_dump('Código del error: '. $code);

            $string = $e->__toString();       
            var_dump('Cadena de texto del error: '. $string);

            exit;
        }

        return response()->json($personal)->with($request);
        
        //return dd($request);
    }

    /**
     * Display the specified Personal.
     */
    public function show($id)
    {
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Persona no encontrada');

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
            Flash::error('Personal not found');

            return redirect(route('personals.index'));
        }

        return view('personals.edit')->with('personal', $personal);
    }

    /**
     * Update the specified Personal in storage.
     */
    public function update($id, UpdatePersonalRequest $request)
    {
        //dd($request);
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Personal no encontrado');

            return redirect(route('personals.index'));
        }

        //$personal = $this->personalRepository->update($request->all(), $id);
        $personal->n_emp = $request->n_emp;
        $personal->name = $request->name;
        $personal->domicilio = $request->domicilio;
        $personal->telefonos = $request->telefonos;
        $personal->telefono_contacto = $request->telefono_contacto;
        $personal->email = $request->email;
        $personal->fecha_cumple = $request->fecha_cumple;
        $personal->fecha_inicio_serv = $request->fecha_inicio_serv;
        $personal->solicitud = $request->solicitud;
        $personal->check_list_ingreso = $request->check_list_ingreso;
        $personal->carta_compromiso = $request->carta_compromiso;
        $personal->resguardo = $request->resguardo;
        $personal->contrato = $request->contrato;

        $personal->retencion = $request->retencion;
        $personal->renuncia = $request->renuncia;
        $personal->actas_administrativas = $request->actas_administrativas;
        $personal->honorarios = $request->honorarios;
        $personal->identificacion_oficial = $request->identificacion_oficial;
        $personal->acta_nacimiento = $request->acta_nacimiento;
        $personal->curp = $request->curp;
        $personal->curp_doc = $request->curp_doc;
        $personal->rfc = $request->rfc;
        $personal->rfc_doc = $request->rfc_doc;
        $personal->nss = $request->nss;
        $personal->nss_doc = $request->nss_doc;
        $personal->comprobante_domicilio = $request->comprobante_domicilio;
        $personal->comprobante_estudios = $request->comprobante_estudios;
        $personal->recomendaciones = $request->recomendaciones;
        $personal->recomendacion_doc = $request->recomendacion_doc;
        $personal->certificado_medico = $request->certificado_medico;
        $personal->antecedentes_no_penales = $request->antecedentes_no_penales;
        $personal->enable = $request->enable;
        $personal->otro_doc_nombre = $request->otro_doc_nombre;
        $personal->otro_doc = $request->otro_doc;
        $personal->observaciones = $request->observaciones;
        //$personal->foto = $request->foto;
        $personal->const_sit_fiscal_doc = $request->const_sit_fiscal_doc;

         //método para guardar la fotografía del personal a registrar.
         if($request->hasFile('foto')){
            $file = $request->file('foto');
            $pName = str_replace(' ', '_', $request->name);
            $destiny = 'assets/personal/';
            $fileName = 'p_' . $pName . '.' . $file->clientExtension();
            $uploadSuccess = $request->file('foto')->move($destiny, $fileName);
            $personal->foto = $fileName;

        }else{
            //$request->remove('foto');
        }

        $personal->save();

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

        Flash::success('Personal eliminado de manera permanente del sistema.');

        return redirect(route('personals.index'));
    }

    public function PersonaltoPDF(){
        $personal = Personal::all();
        $pdf = Pdf::loadView('personals.personaltopdf', compact('personal'));
        return $pdf->stream();
    }

    public function AsistenciaoFalta($personalID, Request $request){
        $persona = Personal::find($personalID);
        $nuevaAsistencia = new Asistencia();
        //$nuevaAsistencia->hoy = 
    }
}
