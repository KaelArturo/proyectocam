<?php

namespace App\Http\Controllers;

use App\Nave;
use App\Mantenimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
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

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $naves = Nave::all();
        return view('mantenimientos.create')
                    ->with('naves', $naves);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
        $data = $request->validate([
            'description' => 'required',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required',
            'observaciones' => 'required',
            'proximo_mante' => 'required',
            'id_nave' => 'required',
        ]);
   
       
        DB::table('mantenimientos')->insert([
            'description' => $data['description'],
            'fecha_inicio'=>$data['fecha_inicio'],
            'fecha_termino'=>$data['fecha_termino'],
            'observaciones'=>$data['observaciones'],
            'proximo_mante'=>$data['proximo_mante'],
            'id_nave'=>$data['id_nave'],
        ]);

        return redirect()->action('NaveController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        //
    }
}
