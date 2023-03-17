<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('venta.index')->with('ventas',$ventas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ventas = new Venta();
        $ventas->codigo = $request->get('codigo');
        $ventas->id_cliente = $request->get('id_cliente');
        $ventas->nombre_producto = $request->get('nombre_producto');        
        $ventas->cantidad = $request->get('cantidad');
        $ventas->precio = $request->get('precio');
        $ventas->save();

        return redirect('/ventas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta = Venta::find($id);
         return view('ventas.edit')->with('venta',$venta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venta = Venta::find($id);
        
        $ventas = new Venta();
        $ventas->codigo = $request->get('codigo');
        $ventas->id_cliente = $request->get('id_cliente');
        $ventas->nombre_producto = $request->get('nombre_producto');        
        $ventas->cantidad = $request->get('cantidad');
        $ventas->precio = $request->get('precio');

        $ventas->save();

        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venta = Venta::find($id);        
        $venta->delete();

        return redirect('/ventas');
    }
}
