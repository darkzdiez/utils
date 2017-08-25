<?php

namespace Hard\Utils\Seeds;

use Illuminate\Database\Seeder;

class LocationEstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_estados')->delete();
        
        \DB::table('location_estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo_cne' => '20',
                'estado' => 'YARACUY',
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
        ));
        
        
    }
}
