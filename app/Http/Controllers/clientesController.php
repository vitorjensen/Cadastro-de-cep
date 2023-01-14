<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        //dd($clientes_cep);

       return view('cliente.index', ['cliente'=>$clientes]);
    }
    public function create()
    {
        return view('cliente.create');
    }

    public function store(RegisterRequest $request)
    {
       Cliente::create($request->all());
       return redirect()->route('clientes-index')->with('sucesso', 'Cep cadastrado com sucesso !!');
    }
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect()->route('clientes-index');
    }
}
