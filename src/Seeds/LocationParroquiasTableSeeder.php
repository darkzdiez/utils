<?php

namespace Hard\Utils\Seeds;

use Illuminate\Database\Seeder;

class LocationParroquiasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_parroquias')->delete();
        
        \DB::table('location_parroquias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parroquia' => 'CM. SAN PABLO',
                'codigo_cne' => '',
                'municipio_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            1 => 
            array (
                'id' => 2,
                'parroquia' => 'CM. AROA',
                'codigo_cne' => '',
                'municipio_id' => 2,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            2 => 
            array (
                'id' => 3,
                'parroquia' => 'CM. CHIVACOA',
                'codigo_cne' => '',
                'municipio_id' => 3,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            3 => 
            array (
                'id' => 4,
                'parroquia' => 'CAMPO ELIAS',
                'codigo_cne' => '',
                'municipio_id' => 3,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            4 => 
            array (
                'id' => 5,
                'parroquia' => 'CM. COCOROTE',
                'codigo_cne' => '',
                'municipio_id' => 4,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            5 => 
            array (
                'id' => 6,
                'parroquia' => 'CM. INDEPENDENCIA',
                'codigo_cne' => '',
                'municipio_id' => 5,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            6 => 
            array (
                'id' => 7,
                'parroquia' => 'CM. SABANA DE PARRA',
                'codigo_cne' => '',
                'municipio_id' => 6,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            7 => 
            array (
                'id' => 8,
                'parroquia' => 'CM. BORAURE',
                'codigo_cne' => '',
                'municipio_id' => 7,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            8 => 
            array (
                'id' => 9,
                'parroquia' => 'CM. YUMARE',
                'codigo_cne' => '',
                'municipio_id' => 8,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            9 => 
            array (
                'id' => 10,
                'parroquia' => 'CM. NIRGUA',
                'codigo_cne' => '',
                'municipio_id' => 9,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            10 => 
            array (
                'id' => 11,
                'parroquia' => 'SALOM',
                'codigo_cne' => '',
                'municipio_id' => 9,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            11 => 
            array (
                'id' => 12,
                'parroquia' => 'TEMERLA',
                'codigo_cne' => '',
                'municipio_id' => 9,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            12 => 
            array (
                'id' => 13,
                'parroquia' => 'CM. YARITAGUA',
                'codigo_cne' => '',
                'municipio_id' => 10,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            13 => 
            array (
                'id' => 14,
                'parroquia' => 'SAN ANDRES',
                'codigo_cne' => '',
                'municipio_id' => 10,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            14 => 
            array (
                'id' => 15,
                'parroquia' => 'CM. SAN FELIPE',
                'codigo_cne' => '',
                'municipio_id' => 11,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            15 => 
            array (
                'id' => 16,
                'parroquia' => 'ALBARICO',
                'codigo_cne' => '',
                'municipio_id' => 11,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            16 => 
            array (
                'id' => 17,
                'parroquia' => 'SAN JAVIER',
                'codigo_cne' => '',
                'municipio_id' => 11,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            17 => 
            array (
                'id' => 18,
                'parroquia' => 'CM .GUAMA',
                'codigo_cne' => '',
                'municipio_id' => 12,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            18 => 
            array (
                'id' => 19,
                'parroquia' => 'CM. URACHICHE',
                'codigo_cne' => '',
                'municipio_id' => 13,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            19 => 
            array (
                'id' => 20,
                'parroquia' => 'CM. FARRIAR',
                'codigo_cne' => '',
                'municipio_id' => 14,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
            20 => 
            array (
                'id' => 21,
                'parroquia' => 'EL GUAYABO',
                'codigo_cne' => '',
                'municipio_id' => 14,
                'created_at' => new \DateTime,
                'updated_at' => nUll,
                'deleted_at' => nUll,
            ),
        ));
        
        
    }
}
