<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FonctionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fonctions')->delete();
        
        \DB::table('fonctions')->insert(array (
            0 => 
            array (
                'id_fonction' => 1,
                'nom' => 'gérant',
                'salaire' => '60000',
                'cadre' => 1,
            ),
            1 => 
            array (
                'id_fonction' => 2,
                'nom' => 'responsable',
                'salaire' => '40000',
                'cadre' => 1,
            ),
            2 => 
            array (
                'id_fonction' => 3,
                'nom' => 'projectionniste',
                'salaire' => '30000',
                'cadre' => 0,
            ),
            3 => 
            array (
                'id_fonction' => 4,
                'nom' => 'hotesse',
                'salaire' => '30000',
                'cadre' => 0,
            ),
            4 => 
            array (
                'id_fonction' => 5,
                'nom' => 'agent sécurité',
                'salaire' => '20000',
                'cadre' => 0,
            ),
            5 => 
            array (
                'id_fonction' => 6,
                'nom' => 'agent entretien',
                'salaire' => '25000',
                'cadre' => 0,
            ),
        ));
        
        
    }
}