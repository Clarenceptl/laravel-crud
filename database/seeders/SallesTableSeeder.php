<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salles')->delete();
        
        \DB::table('salles')->insert(array (
            0 => 
            array (
                'id_salle' => 1,
                'numero_salle' => 1,
                'nom_salle' => 'Martin Scorsese',
                'etage_salle' => 0,
                'places' => 135,
            ),
            1 => 
            array (
                'id_salle' => 2,
                'numero_salle' => 2,
                'nom_salle' => 'Orson Welles',
                'etage_salle' => 0,
                'places' => 300,
            ),
            2 => 
            array (
                'id_salle' => 3,
                'numero_salle' => 3,
                'nom_salle' => 'Edward Davis Wood Jr',
                'etage_salle' => 0,
                'places' => 85,
            ),
            3 => 
            array (
                'id_salle' => 4,
                'numero_salle' => 4,
                'nom_salle' => 'Quentin Tarentino',
                'etage_salle' => 1,
                'places' => 85,
            ),
            4 => 
            array (
                'id_salle' => 5,
                'numero_salle' => 5,
                'nom_salle' => 'Steven Spielberg',
                'etage_salle' => 1,
                'places' => 125,
            ),
            5 => 
            array (
                'id_salle' => 6,
                'numero_salle' => 6,
                'nom_salle' => 'Georges Lucas',
                'etage_salle' => 1,
                'places' => 85,
            ),
            6 => 
            array (
                'id_salle' => 7,
                'numero_salle' => 7,
                'nom_salle' => 'Alfred Hitchcock',
                'etage_salle' => 1,
                'places' => 300,
            ),
            7 => 
            array (
                'id_salle' => 8,
                'numero_salle' => 8,
                'nom_salle' => 'Tim Burton',
                'etage_salle' => 1,
                'places' => 85,
            ),
            8 => 
            array (
                'id_salle' => 9,
                'numero_salle' => 9,
                'nom_salle' => 'Stanley Kubrick',
                'etage_salle' => 1,
                'places' => 280,
            ),
            9 => 
            array (
                'id_salle' => 10,
                'numero_salle' => 10,
                'nom_salle' => 'Hayao Miyazaki',
                'etage_salle' => 1,
                'places' => 125,
            ),
            10 => 
            array (
                'id_salle' => 11,
                'numero_salle' => 11,
                'nom_salle' => 'Peter Jackson',
                'etage_salle' => 2,
                'places' => 200,
            ),
            11 => 
            array (
                'id_salle' => 12,
                'numero_salle' => 12,
                'nom_salle' => 'Charles Chaplin',
                'etage_salle' => 2,
                'places' => 35,
            ),
            12 => 
            array (
                'id_salle' => 13,
                'numero_salle' => 13,
                'nom_salle' => 'David Lynch',
                'etage_salle' => 2,
                'places' => 89,
            ),
            13 => 
            array (
                'id_salle' => 14,
                'numero_salle' => 14,
                'nom_salle' => 'Robert Redford',
                'etage_salle' => 2,
                'places' => 225,
            ),
            14 => 
            array (
                'id_salle' => 15,
                'numero_salle' => 15,
                'nom_salle' => 'Ridley Scott',
                'etage_salle' => 3,
                'places' => 225,
            ),
        ));
        
        
    }
}