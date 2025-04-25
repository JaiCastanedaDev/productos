<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = Producto::all();
        $request->validate(['nombre' => 'required', 'referencia' => 'required',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'fecha_de_creacion' => 'required|date']);

        Producto::create($request->all());
        return view('producto.index')->with('success', 'Producto creado correctamente.')
            ->with('productos', $productos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate(['nombre' => 'required', 'referencia' => 'required',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'fecha_de_creacion' => 'required|date']);
        $producto->update($request->all());
        return redirect()->route('producto')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto')->with('success', 'Producto actualizado correctamente.');

    }
}
