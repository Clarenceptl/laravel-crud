<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employes')->delete();
        
        \DB::table('employes')->insert(array (
            0 => 
            array (
                'id_employe' => 1,
                'id_personne' => 1,
                'id_fonction' => 6,
            ),
            1 => 
            array (
                'id_employe' => 2,
                'id_personne' => 2,
                'id_fonction' => 6,
            ),
            2 => 
            array (
                'id_employe' => 3,
                'id_personne' => 3,
                'id_fonction' => 4,
            ),
            3 => 
            array (
                'id_employe' => 4,
                'id_personne' => 4,
                'id_fonction' => 3,
            ),
            4 => 
            array (
                'id_employe' => 5,
                'id_personne' => 5,
                'id_fonction' => 4,
            ),
            5 => 
            array (
                'id_employe' => 6,
                'id_personne' => 6,
                'id_fonction' => 6,
            ),
            6 => 
            array (
                'id_employe' => 7,
                'id_personne' => 7,
                'id_fonction' => 6,
            ),
            7 => 
            array (
                'id_employe' => 8,
                'id_personne' => 8,
                'id_fonction' => 4,
            ),
            8 => 
            array (
                'id_employe' => 9,
                'id_personne' => 9,
                'id_fonction' => 5,
            ),
            9 => 
            array (
                'id_employe' => 10,
                'id_personne' => 10,
                'id_fonction' => 3,
            ),
            10 => 
            array (
                'id_employe' => 11,
                'id_personne' => 11,
                'id_fonction' => 4,
            ),
            11 => 
            array (
                'id_employe' => 12,
                'id_personne' => 12,
                'id_fonction' => 4,
            ),
            12 => 
            array (
                'id_employe' => 13,
                'id_personne' => 13,
                'id_fonction' => 4,
            ),
            13 => 
            array (
                'id_employe' => 14,
                'id_personne' => 14,
                'id_fonction' => 3,
            ),
            14 => 
            array (
                'id_employe' => 15,
                'id_personne' => 15,
                'id_fonction' => 4,
            ),
            15 => 
            array (
                'id_employe' => 16,
                'id_personne' => 16,
                'id_fonction' => 4,
            ),
            16 => 
            array (
                'id_employe' => 17,
                'id_personne' => 17,
                'id_fonction' => 5,
            ),
            17 => 
            array (
                'id_employe' => 18,
                'id_personne' => 18,
                'id_fonction' => 3,
            ),
            18 => 
            array (
                'id_employe' => 19,
                'id_personne' => 19,
                'id_fonction' => 5,
            ),
            19 => 
            array (
                'id_employe' => 20,
                'id_personne' => 20,
                'id_fonction' => 4,
            ),
            20 => 
            array (
                'id_employe' => 21,
                'id_personne' => 21,
                'id_fonction' => 5,
            ),
            21 => 
            array (
                'id_employe' => 22,
                'id_personne' => 22,
                'id_fonction' => 4,
            ),
            22 => 
            array (
                'id_employe' => 23,
                'id_personne' => 23,
                'id_fonction' => 5,
            ),
            23 => 
            array (
                'id_employe' => 24,
                'id_personne' => 24,
                'id_fonction' => 5,
            ),
            24 => 
            array (
                'id_employe' => 25,
                'id_personne' => 25,
                'id_fonction' => 5,
            ),
            25 => 
            array (
                'id_employe' => 26,
                'id_personne' => 26,
                'id_fonction' => 5,
            ),
            26 => 
            array (
                'id_employe' => 27,
                'id_personne' => 27,
                'id_fonction' => 4,
            ),
            27 => 
            array (
                'id_employe' => 28,
                'id_personne' => 28,
                'id_fonction' => 5,
            ),
            28 => 
            array (
                'id_employe' => 29,
                'id_personne' => 29,
                'id_fonction' => 5,
            ),
            29 => 
            array (
                'id_employe' => 30,
                'id_personne' => 30,
                'id_fonction' => 3,
            ),
            30 => 
            array (
                'id_employe' => 31,
                'id_personne' => 31,
                'id_fonction' => 5,
            ),
            31 => 
            array (
                'id_employe' => 32,
                'id_personne' => 32,
                'id_fonction' => 4,
            ),
            32 => 
            array (
                'id_employe' => 33,
                'id_personne' => 33,
                'id_fonction' => 3,
            ),
            33 => 
            array (
                'id_employe' => 34,
                'id_personne' => 34,
                'id_fonction' => 3,
            ),
            34 => 
            array (
                'id_employe' => 35,
                'id_personne' => 35,
                'id_fonction' => 4,
            ),
            35 => 
            array (
                'id_employe' => 36,
                'id_personne' => 36,
                'id_fonction' => 3,
            ),
            36 => 
            array (
                'id_employe' => 37,
                'id_personne' => 145,
                'id_fonction' => 1,
            ),
            37 => 
            array (
                'id_employe' => 38,
                'id_personne' => 148,
                'id_fonction' => 2,
            ),
            38 => 
            array (
                'id_employe' => 39,
                'id_personne' => 142,
                'id_fonction' => 2,
            ),
            39 => 
            array (
                'id_employe' => 40,
                'id_personne' => 144,
                'id_fonction' => 2,
            ),
        ));
        
        
    }
}