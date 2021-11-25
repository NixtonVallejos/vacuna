<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use DateTime;
use Illuminate\Support\Facades\Date;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Registro();
        $registro->administrada_a = $request->get('date');
        $registro->user_id = $request->get('user_id');
        $registro->enfermero_id = $request->get('enfermero_id');
        $registro->vacuna_id = $request->get('vacuna_id');
        $registro->centro_id = $request->get('centro_id');
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
        $registro = Registro::find($id);
        return view('Registro.edit')->with('registro',$registro);
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
        $registro = Registro::find($id);
        $registro->administrada_a = $request->get('date');
        $registro->user_id = $request->get('user_id');
        $registro->enfermero_id = $request->get('enfermero_id');
        $registro->vacuna_id = $request->get('vacuna_id');
        $registro->centro_id = $request->get('centro_id');
        $registro->save();

        return redirect('/Registro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);        
        $registro->delete();

        return redirect('/Registro');
    }
}
