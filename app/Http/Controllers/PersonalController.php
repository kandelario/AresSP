<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Personal;
use App\Repositories\PersonalRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use Illuminate\Http\JsonResponse;
use Exception;

use Barryvdh\DomPDF\Facade\Pdf;

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
        try {
            $input = $request->all();

            $personal = $this->personalRepository->create($input);

            Flash::success('Personal saved successfully.');

            return redirect(route('personals.index'));

        } catch (Exception $e) {
              
            $message = $e->getMessage();
            var_dump('Exception Message: '. $message);
  
            $code = $e->getCode();       
            var_dump('Exception Code: '. $code);
  
            $string = $e->__toString();       
            var_dump('Exception String: '. $string);
  
            exit;
        }
  
        return response()->json($personal);
        
        //return dd($request);
        
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
        $personal = $this->personalRepository->find($id);

        if (empty($personal)) {
            Flash::error('Personal not found');

            return redirect(route('personals.index'));
        }

        $personal = $this->personalRepository->update($request->all(), $id);

        Flash::success('Personal updated successfully.');

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
            Flash::error('Personal not found');

            return redirect(route('personals.index'));
        }

        $this->personalRepository->delete($id);

        Flash::success('Personal deleted successfully.');

        return redirect(route('personals.index'));
    }

    public function PersonaltoPDF(){
        $personal = Personal::all();
        $pdf = Pdf::loadView('personals.personaltopdf', compact('personal'));
        return $pdf->stream();
    }
}
