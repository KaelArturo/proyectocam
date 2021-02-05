<?php

namespace App\Http\Controllers;

use App\Nave;
use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NaveController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   /*  public function __construct()
    {
        $this->middleware('auth');
    }
*/


    public function index()
    {
        
        $naves = Nave::all();
        $empresas = Empresa::all(['id','nombre_empresa']);
      

        return view('naves.naves')
                    ->with('naves',$naves)
                    ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DB::table('naves')->get()->dd();
        $empresas = Empresa::all(['id','nombre_empresa']);

        return view('naves.create')
                        ->with('empresas', $empresas);
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
        $data = request()->validate([
            'numero_nave' => 'required',
            'seccion' => 'required',
            'superficie' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'precio' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'renta_mensual' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'iva' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'renta_total' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'empresa' => 'required',
            
        ]);

        DB::table('naves')->insert([ 
                                     'num_nave' =>  $data['numero_nave'],       
                                     'seccion' =>  $data['seccion'],
                                     'superficie' =>  $data['superficie'],
                                     'precio' =>  $data['precio'],
                                     'renta_mensual' =>  $data['renta_mensual'],
                                     'iva' =>  $data['iva'],
                                     'renta_total' =>  $data['renta_total'],
                                     'empresa_id' => $data['empresa'],
                                    ]);


        return redirect()->action('NaveController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nave  $nave
     * @return \Illuminate\Http\Response
     */
    public function show(Nave $nave)
    {   
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nave  $nave
     * @return \Illuminate\Http\Response
     */
    public function edit(Nave $nave)
    {   
        $empresas = Empresa::all(['id','nombre_empresa']);
        return view('naves.edit')
                    ->with('nave',$nave)
                    ->with('empresas', $empresas);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nave  $nave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nave $nave)
    {
        //$this->authorize('update', $nave); codigo para saber si realmente la persona que esta logueada puede
        //editar la nave (receta)

        $data = $request->validate([
            'num_nave' => 'required',
            'seccion' => 'required',
            'superficie' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'precio' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'renta_mensual' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'iva' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'renta_total' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
        ]);

  
        //asignar valores

        $nave->num_nave = $data['num_nave'];
        $nave->seccion = $data['seccion'];
        $nave->superficie = $data['superficie'];
        $nave->precio = $data['precio'];
        $nave->renta_mensual = $data['renta_mensual'];
        $nave->iva = $data['iva'];
        $nave->renta_total = $data['renta_total'];
       
        $nave->save();

        return redirect()->action('NaveController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nave  $nave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nave $nave)
    {
        //ejecutar el policy
        //$this->authorize('delete', $nave);

        //eliminar la nave
     
        $nave->delete();
        return redirect()->action('NaveController@index');
    }
}
