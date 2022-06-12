<?php

namespace App\Http\Controllers;

use App\Models\Perk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.crud.perks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perk = new Perk();
        return view('admin.crud.perks.create', compact('perk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'perkname' => 'required|max:254',
            'description' => 'required',
            'price' => 'required'
        ]);

        // almacenando perk
        $perk = Perk::create($request->all());

        // Mensaje
        Alert::success('¡Éxito!', 'Se ha creado el perk: ' . $request->perkname);

        // Redireccionar a la vista index
        return redirect()->route('admin.perks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perk $perk)
    {
        return view('admin.crud.perks.edit', compact('perk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perk $perk)
    {
        return view('admin.crud.perks.edit', compact('perk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perk $perk)
    {
        // Validación
        $request->validate([
            'perkname' => 'required|max:254',
            'description' => 'required',
            'price' => 'required'
            /*
            'autor',
            'editorial',
            'edicion',
            'paginas',
            'isbn',
            'url_img_caratula',
            'notas'
            */
        ]);

        // actualizando Perk
        $perk->update($request->all());

        // Mensaje
        Alert::success('¡Éxito!', 'Se ha actualizado el perk: ' . $request->perkname);

        // Redireccionar a la vista index
        return redirect()->route('admin.perks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perk $perk)
    {
        $titulo = $perk->perkname;
        $perk->delete();
        Alert::info('¡Advertencia!', 'Se ha eliminado el perk: ' . $titulo);
        return redirect()->route('admin.perks.index');
    }
}
