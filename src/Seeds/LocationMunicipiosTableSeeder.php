<?php

namespace Hard\Utils\Seeds;

use Illuminate\Database\Seeder;

class LocationMunicipiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_municipios')->delete();
        
        \DB::table('location_municipios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'municipio' => 'ARISTIDES BASTIDAS',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            1 => 
            array (
                'id' => 2,
                'municipio' => 'BOLIVAR',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            2 => 
            array (
                'id' => 3,
                'municipio' => 'BRUZUAL',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            3 => 
            array (
                'id' => 4,
                'municipio' => 'COCOROTE',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            4 => 
            array (
                'id' => 5,
                'municipio' => 'INDEPENDENCIA',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            5 => 
            array (
                'id' => 6,
                'municipio' => 'JOSE ANTONIO PAEZ',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            6 => 
            array (
                'id' => 7,
                'municipio' => 'LA TRINIDAD',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            7 => 
            array (
                'id' => 8,
                'municipio' => 'MANUEL MONGE',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            8 => 
            array (
                'id' => 9,
                'municipio' => 'NIRGUA',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            9 => 
            array (
                'id' => 10,
                'municipio' => 'PEÑA',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            10 => 
            array (
                'id' => 11,
                'municipio' => 'SAN FELIPE',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            11 => 
            array (
                'id' => 12,
                'municipio' => 'SUCRE',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            12 => 
            array (
                'id' => 13,
                'municipio' => 'ARISTIDES BASTIDAS',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            13 => 
            array (
                'id' => 14,
                'municipio' => 'VEROES',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
        ));
        
        
    }
}
