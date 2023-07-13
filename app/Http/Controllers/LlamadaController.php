<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Llamada;
use App\Models\Eess;
use App\Models\Operador;
use App\Models\Telefono;
use App\Models\Categoria;
use App\Models\Estado;

class LlamadaController extends Controller
{

    public function index(): View
    {
        $llamadas = Llamada::all();
        return view('llamada.index')->with('llamadas', $llamadas);
    }


    public function create(): View
    {
        $eessNombres = Eess::select('nombre', 'id')->get();
        $operadores = Operador::select('nombre', 'id')->get();
        $telefonos = Telefono::select('telefono', 'id')->get();
        $categorias = Categoria::select('nombre', 'id')->get();
        $estados = Estado::select('nombre', 'id')->get();
        return view('llamada.create')
            ->with('llamada', new Llamada())
            ->with('eessNombres', $eessNombres)
            ->with('operadores', $operadores)
            ->with('telefonos', $telefonos)
            ->with('categorias', $categorias)
            ->with('estados', $estados);
    }

    public function edit($id): View
    {

        return view('llamada.edit');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
