<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;
//use Flash;
use Laracasts\Flash\Flash;

use App\Models\PaymentType;

class ClienteController extends AppBaseController
{
    /** @var ClienteRepository $clienteRepository*/
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the Cliente.
     */
    public function index(Request $request)
    {
        $clientes = $this->clienteRepository->paginate(100);
        // $clientes = Cliente::all();
        $tipos_pago = PaymentType::all();


        return view('clientes.index')
            ->with('clientes', $clientes)
            ->with('tipos_pago', $tipos_pago);
    }

    /**
     * Show the form for creating a new Cliente.
     */
    public function create()
    {
        $payment_types = PaymentType::all();
        return view('clientes.create', compact('payment_types'));
    }

    /**
     * Store a newly created Cliente in storage.
     */
    public function store(CreateClienteRequest $request)
    {
        $input = $request->all();
        $cliente = $this->clienteRepository->create($input);

        // if($request->hasFile('constancia_sf')){
        //     $file = $request->file('constancia_sf');
        //     $destiny = 'assets/clients_files/';
        //     $fileName = 'csf_' . $cliente->id . '.' . $file->clientExtension();
        //     $uploadSuccess = $request->file('constancia_sf')->move($destiny, $fileName);
        //     $cliente->constancia_sf = $fileName;
        // }

        

        Flash::success('Cliente saved successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified Cliente.
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified Cliente.
     */
    public function edit($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified Cliente in storage.
     */
    public function update($id, UpdateClienteRequest $request)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        if($request->hasFile('constancia_sf')){
            $file = $request->file('constancia_sf');
            $destiny = 'assets/clients_files/';
            $fileName = 'csf_' . $cliente->id . '.' . $file->clientExtension();
            $uploadSuccess = $request->file('constancia_sf')->move($destiny, $fileName);
            $cliente->constancia_sf = $fileName;
        }

        $cliente->save();

        $cliente = $this->clienteRepository->update($request->all(), $id);

        Flash::success('Cliente actualizado satisfactoriamente.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified Cliente from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $this->clienteRepository->delete($id);

        Flash::success('Cliente deleted successfully.');

        return redirect(route('clientes.index'));
    }
}
