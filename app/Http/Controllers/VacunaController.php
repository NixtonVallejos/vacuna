<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacuna;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacuna = Vacuna::all();
        return view('Vacuna.index')->with('vacuna',$vacuna);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vacuna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacuna = new Vacuna();
        $vacuna->name = $request->get('name');
        $vacuna->lavoratorio = $request->get('lavoratorio');
        $vacuna->cadena_frio = $request->get('cadena_frio');
        $vacuna->dosis = $request->get('dosis');
        $vacuna->inactiva = $request->get('inactiva');
        $vacuna->vector_viral = $request->get('vector_viral');
        $vacuna->nucleicos = $request->get('nucleicos');
        $vacuna->sub_unidad_proteica = $request->get('sub_unidad_proteica');
        $vacuna->save();

        return redirect('/vacuna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacuna = Vacuna::find($id);
        return view('vacuna.edit')->with('vacuna',$vacuna);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vacuna = Vacuna::find($id);
        $vacuna->name = $request->get('name');
        $vacuna->lavoratorio = $request->get('lavoratorio');
        $vacuna->cadena_frio = $request->get('cadena_frio');
        $vacuna->dosis = $request->get('dosis');
        $vacuna->inactiva = $request->get('inactiva');
        $vacuna->vector_viral = $request->get('vector_viral');
        $vacuna->nucleicos = $request->get('nucleicos');
        $vacuna->sub_unidad_proteica = $request->get('sub_unidad_proteica');
        $vacuna->save();

        return redirect('/vacuna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacuna = Vacuna::find($id);
        $vacuna->delete();
        return redirect('/vacuna');
    }
}
