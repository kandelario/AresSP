<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRazonSocialRequest;
use App\Http\Requests\UpdateRazonSocialRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RazonSocialRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class RazonSocialController extends AppBaseController
{
    /** @var RazonSocialRepository $razonSocialRepository*/
    private $razonSocialRepository;

    public function __construct(RazonSocialRepository $razonSocialRepo)
    {
        $this->razonSocialRepository = $razonSocialRepo;
    }

    /**
     * Display a listing of the RazonSocial.
     */
    public function index(Request $request)
    {
        $razonSocials = $this->razonSocialRepository->paginate(10);

        return view('razon_socials.index')
            ->with('razonSocials', $razonSocials);
    }

    /**
     * Show the form for creating a new RazonSocial.
     */
    public function create()
    {
        return view('razon_socials.create');
    }

    /**
     * Store a newly created RazonSocial in storage.
     */
    public function store(CreateRazonSocialRequest $request)
    {
        $input = $request->all();

        $razonSocial = $this->razonSocialRepository->create($input);

        Flash::success('Razon Social saved successfully.');

        return redirect(route('razon-socials.index'));
    }

    /**
     * Display the specified RazonSocial.
     */
    public function show($id)
    {
        $razonSocial = $this->razonSocialRepository->find($id);

        if (empty($razonSocial)) {
            Flash::error('Razon Social not found');

            return redirect(route('razon-socials.index'));
        }

        return view('razon_socials.show')->with('razonSocial', $razonSocial);
    }

    /**
     * Show the form for editing the specified RazonSocial.
     */
    public function edit($id)
    {
        $razonSocial = $this->razonSocialRepository->find($id);

        if (empty($razonSocial)) {
            Flash::error('Razon Social not found');

            return redirect(route('razon-socials.index'));
        }

        return view('razon_socials.edit')->with('razonSocial', $razonSocial);
    }

    /**
     * Update the specified RazonSocial in storage.
     */
    public function update($id, UpdateRazonSocialRequest $request)
    {
        $razonSocial = $this->razonSocialRepository->find($id);

        if (empty($razonSocial)) {
            Flash::error('Razon Social not found');

            return redirect(route('razon-socials.index'));
        }

        $razonSocial = $this->razonSocialRepository->update($request->all(), $id);

        Flash::success('Razon Social updated successfully.');

        return redirect(route('razon-socials.index'));
    }

    /**
     * Remove the specified RazonSocial from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $razonSocial = $this->razonSocialRepository->find($id);

        if (empty($razonSocial)) {
            Flash::error('Razon Social not found');

            return redirect(route('razon-socials.index'));
        }

        $this->razonSocialRepository->delete($id);

        Flash::success('Razon Social deleted successfully.');

        return redirect(route('razon-socials.index'));
    }
}
