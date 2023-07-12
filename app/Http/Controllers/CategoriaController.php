<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create', ['categoria' => new Categoria()]);
    }

    public function show(Categoria $categoria)
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    public function store(StoreCategoriaRequest $request)
    {
        Categoria::create($request->validated());

        return to_route('categorias.index')->with('status', 'Categoria created!');
    }

    public function update(StoreCategoriaRequest $request, Categoria $categoria)
    {
        // $categoria->update([
        //     'nombre' => request('nombre'),
        //     'descripcion' => request('descripcion'),
        // ]);

        $categoria->update($request->validated());

        return redirect()->route('categorias.index');
    }

    public function edit(Categoria $categoria)
    {
        $categoriasNombres = Categoria::select('nombre')
            ->whereNotIn('nombre', [$categoria->nombre])
            ->get();

        return view('categoria.edit', [
            'categoria' => $categoria,
            'categoriasNombres' => $categoriasNombres,
        ]);
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
