<?php

use App\Nave;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   


       DB::table('naves')->insert([
            'num_nave' => '1',
            'seccion' => '1a',
            'superficie' => 900 ,
            'precio' => 48.00,
            'renta_mensual' => 43200.00,
            'iva' => 6912.00,
            'renta_total' => 50112.00,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 1,
        ]);
       DB::table('naves')->insert([
            'num_nave' => '2',
            'seccion' => '1a',
            'superficie' => 600 ,
            'precio' => 42.98,
            'renta_mensual' => 25788.00,
            'iva' => 4126.08,
            'renta_total' => 29914.08,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 2,
        ]);
      DB::table('naves')->insert([
            'num_nave' => '2A',
            'seccion' => '1a',
            'superficie' => 900 ,
            'precio' => 43.10,
            'renta_mensual' => 38790.00,
            'iva' => 6206.40,
            'renta_total' => 44996.40,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 2,
        ]);
         DB::table('naves')->insert([
            'num_nave' => '3',
            'seccion' => '1a',
            'superficie' => 900 ,
            'precio' => 55.00,
            'renta_mensual' => 49500.00,
            'iva' => 7920.00,
            'renta_total' => 57420.00,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 3,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '3A',
            'seccion' => '1a',
            'superficie' => 1200 ,
            'precio' => 36.38,
            'renta_mensual' => 43656.00,
            'iva' => 6984.96,
            'renta_total' => 50640.96,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' =>  4,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '4',
            'seccion' => '1a',
            'superficie' => 1200 ,
            'precio' => 50.00,
            'renta_mensual' => 60000.00,
            'iva' => 9600.00,
            'renta_total' => 69600.00,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 5,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '4a',
            'seccion' => '1a',
            'superficie' => 900,
            'precio' => 0,
            'renta_mensual' =>0,
            'iva' =>0,
            'renta_total' => 0,
            'observaciones' => '',
            'estatus' => true,
            'empresa_id' => 1,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '13',
            'seccion' => '1a',
            'superficie' => 3600,
            'precio' => 53.43,
            'renta_mensual' => 192348.00,
            'iva' => 30775.68,
            'renta_total' => 223123.68,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' =>  6,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '6',
            'seccion' => '1a',
            'superficie' => 1500,
            'precio' => 52.61,
            'renta_mensual' => 78915.00,
            'iva' => 12626.40,
            'renta_total' => 91541.40,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 7,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '7',
            'seccion' => '1a',
            'superficie' => 2100,
            'precio' => 57.76,
            'renta_mensual' => 121296.00,
            'iva' => 19407.36,
            'renta_total' => 140703.36,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 8,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '8',
            'seccion' => 'AZUL',
            'superficie' => 850,
            'precio' => 51.70,
            'renta_mensual' => 43945.00,
            'iva' => 7031.20,
            'renta_total' => 50976.20,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '8A',
            'seccion' => 'AZUL',
            'superficie' => 1200,
            'precio' => 48.60,
            'renta_mensual' => 58320.00,
            'iva' => 9331.20,
            'renta_total' => 67651.20,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]); 
        DB::table('naves')->insert([
            'num_nave' => '9',
            'seccion' => 'AZUL',
            'superficie' => 1600 ,
            'precio' => 50.42,
            'renta_mensual' => 80672.00,
            'iva' => 12907.52,
            'renta_total' => 93579.52,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '10A',
            'seccion' => 'AZUL',
            'superficie' => 1600,
            'precio' => 54.47,
            'renta_mensual' => 87152.00,
            'iva' => 13944.32,
            'renta_total' => 101096.32,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '11A',
            'seccion' => 'AZUL',
            'superficie' => 1600 ,
            'precio' => 54.47,
            'renta_mensual' => 87152.00,
            'iva' => 13944.32,
            'renta_total' => 101096.32,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '11B',
            'seccion' => 'AZUL',
            'superficie' => 1200 ,
            'precio' => 54.47,
            'renta_mensual' => 65364.00,
            'iva' => 10458.24,
            'renta_total' => 75822.24,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '12',
            'seccion' => 'AZUL',
            'superficie' => 2000 ,
            'precio' => 56.00,
            'renta_mensual' => 112000.00,
            'iva' => 17920.00,
            'renta_total' => 129920.00,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 2,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '14',
            'seccion' => '2a',
            'superficie' => 28402,
            'precio' => 55.44,
            'renta_mensual' => 1574606.88,
            'iva' => 251937.10,
            'renta_total' => 1826543.98,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '15',
            'seccion' => '2a',
            'superficie' => 12070,
            'precio' => 56.00,
            'renta_mensual' => 675920.00,
            'iva' => 108147.20,
            'renta_total' => 784067.20,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 2,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '3',
            'seccion' => '2a',
            'superficie' => 2043,
            'precio' => 51.92,
            'renta_mensual' => 106072.56,
            'iva' => 16971.61,
            'renta_total' => 123044.17,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '11',
            'seccion' => '2a',
            'superficie' => 1843 ,
            'precio' => 53.38,
            'renta_mensual' => 98379.34,
            'iva' => 15740.69,
            'renta_total' => 114120.03,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 10,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '10',
            'seccion' => '2a',
            'superficie' => 1800,
            'precio' => 49.16,
            'renta_mensual' => 88488.00,
            'iva' => 14158.08,
            'renta_total' => 102646.08,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 11,
        ]);
        DB::table('naves')->insert([
            'num_nave' => '8',
            'seccion' => '2a',
            'superficie' => 1445,
            'precio' => 45.86,
            'renta_mensual' => 66267.70,
            'iva' => 10602.83,
            'renta_total' => 76870.53,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 12,
        ]);
        DB::table('naves')->insert([
            'num_nave' => 'C',
            'seccion' => '2a',
            'superficie' => 1581,
            'precio' => 36.55,
            'renta_mensual' => 57785.55,
            'iva' => 9245.69,
            'renta_total' => 67031.24,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
         ]);
       DB::table('naves')->insert([
            'num_nave' => 'Finsa',
            'seccion' => '',
            'superficie' => 5232,
            'precio' => 50,
            'renta_mensual' => 261617.00,
            'iva' => 41858.72,
            'renta_total' => 303475.72,
            'observaciones' => '',
            'estatus' => false,
            'empresa_id' => 9,
        ]);

    }
}
