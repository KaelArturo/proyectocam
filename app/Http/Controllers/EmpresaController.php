<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
      

        $data = $request->validate([
            'nombre_empresa' => 'required',
            'representante_legal' => 'required',
        ]);
        DB::table('empresas')->insert([
            'nombre_empresa' => $data['nombre_empresa'],
            'representante_legal'=>$data['representante_legal'],
        ]);

        return redirect()->action('NaveController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
         return "HOLA";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
     
       return view('empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        

        $data = $request->validate([
            'nombre_empresa' => 'required',
            'representante_legal' => 'required',
        ]);
        
        $empresa->nombre_empresa = $data['nombre_empresa'];
        $empresa->representante_legal = $data['representante_legal'];

        $empresa->save();

       


        return redirect()->action('NaveController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
