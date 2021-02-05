<?php

use App\Empresa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



       


        //1
        DB::table('empresas')->insert([
            'nombre_empresa' => 'ECOPLATING',
            'representante_legal' => 'RAMON PAGES LOPEZ',
        ]);
        //2
        DB::table('empresas')->insert([
            'nombre_empresa' => 'Palmex',
            'representante_legal' => '',
        ]);
        //3
        DB::table('empresas')->insert([
            'nombre_empresa' => 'ALVACO ENTERPRISES',
            'representante_legal' => 'JESUS CAMPOS LOPEZ',
        ]);
        //4
        DB::table('empresas')->insert([
            'nombre_empresa' => 'ARTE JIN, S.A. DE C.V.',
            'representante_legal' => 'HYUN SOOK JEONG',
        ]);
        //5
        DB::table('empresas')->insert([
            'nombre_empresa' => 'DISTRIBUIDORA SYA (AVON)',
            'representante_legal' => 'RENE GERMAN SABIDO MALPICA',
        ]);
        //6
        DB::table('empresas')->insert([
            'nombre_empresa' => 'KD COMPANY, S.A. DE C.V.',
            'representante_legal' => 'OK SOON KIM',
        ]);
        //7
        DB::table('empresas')->insert([
            'nombre_empresa' => 'FORMATOS ESPECIALIZADOS DE DIST.(LOGIS)',
            'representante_legal' => 'CONCEPCION ALVAREZ TORRES',
        ]);
        //8
        DB::table('empresas')->insert([
            'nombre_empresa' => 'C.R.P. DE MEXICO, S.A. DE C.V.',
            'representante_legal' => 'SALVADOR JAIME DOMINGUEZ DEL OLMO',
        ]);
        //9
        DB::table('empresas')->insert([
            'nombre_empresa' => 'NICRO BOLTA',
            'representante_legal' => 'THOMAS ALAN CHARLES SLABIG',
        ]);
        //10
        DB::table('empresas')->insert([
            'nombre_empresa' => 'GRUPO OVALTEX',
            'representante_legal' => 'PATROCINIO ENRIQUE OVALLE GUTIERREZ',
        ]);
        //11
        DB::table('empresas')->insert([
            'nombre_empresa' => 'LODANMEX',
            'representante_legal' => 'CARLOS LOZANO GOMEZ',
        ]);
        //12
        DB::table('empresas')->insert([
            'nombre_empresa' => 'ETIQUALITY',
            'representante_legal' => 'MANUEL LOPEZ MAZUELAS',
        ]);
        //13
        DB::table('empresas')->insert([
            'nombre_empresa' => 'BANORTE - CAJERO AUTOMATICO',
            'representante_legal' => 'JOSE ALFREDO BALCAZAR MARTINEZ',
        ]);
     

    }
}
