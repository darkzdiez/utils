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
                'abreviatura' => 'AB',
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
                'abreviatura' => 'BO',
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
                'abreviatura' => 'BR',
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
                'abreviatura' => 'CO',
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
                'abreviatura' => 'IN',
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
                'abreviatura' => 'JP',
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
                'abreviatura' => 'LT',
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
                'abreviatura' => 'MM',
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
                'abreviatura' => 'NI',
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
                'abreviatura' => 'PE',
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
                'abreviatura' => 'SF',
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
                'abreviatura' => 'SU',
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
                'abreviatura' => 'AB',
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
                'abreviatura' => 'VE',
                'codigo_cne' => '',
                'estado_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
        ));
        
        
    }
}
