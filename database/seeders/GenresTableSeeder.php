<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('genres')->delete();

        \DB::table('genres')->insert(array (
            0 =>
            array (
                'id_genre' => 0,
                'nom' => 'detective',
            ),
            1 =>
            array (
                'id_genre' => 1,
                'nom' => 'dramatic comedy',
            ),
            2 =>
            array (
                'id_genre' => 2,
                'nom' => 'science fiction',
            ),
            3 =>
            array (
                'id_genre' => 3,
                'nom' => 'drama',
            ),
            4 =>
            array (
                'id_genre' => 4,
                'nom' => 'documentary',
            ),
            5 =>
            array (
                'id_genre' => 5,
                'nom' => 'animation',
            ),
            6 =>
            array (
                'id_genre' => 6,
                'nom' => 'comedy',
            ),
            7 =>
            array (
                'id_genre' => 7,
                'nom' => 'fantasy',
            ),
            8 =>
            array (
                'id_genre' => 8,
                'nom' => 'action',
            ),
            9 =>
            array (
                'id_genre' => 9,
                'nom' => 'thriller',
            ),
            10 =>
            array (
                'id_genre' => 10,
                'nom' => 'adventure',
            ),
            11 =>
            array (
                'id_genre' => 11,
                'nom' => 'various',
            ),
            12 =>
            array (
                'id_genre' => 12,
                'nom' => 'historical',
            ),
            13 =>
            array (
                'id_genre' => 13,
                'nom' => 'western',
            ),
            14 =>
            array (
                'id_genre' => 14,
                'nom' => 'romance',
            ),
            15 =>
            array (
                'id_genre' => 15,
                'nom' => 'music',
            ),
            16 =>
            array (
                'id_genre' => 16,
                'nom' => 'musical',
            ),
            17 =>
            array (
                'id_genre' => 17,
                'nom' => 'horror',
            ),
            18 =>
            array (
                'id_genre' => 18,
                'nom' => 'war',
            ),
            19 =>
            array (
                'id_genre' => 19,
                'nom' => 'unknow',
            ),
            20 =>
            array (
                'id_genre' => 20,
                'nom' => 'spying',
            ),
            21 =>
            array (
                'id_genre' => 21,
                'nom' => 'historical epic',
            ),
            22 =>
            array (
                'id_genre' => 22,
                'nom' => 'biography',
            ),
            23 =>
            array (
                'id_genre' => 23,
                'nom' => 'experimental',
            ),
            24 =>
            array (
                'id_genre' => 24,
                'nom' => 'short film',
            ),
            25 =>
            array (
                'id_genre' => 25,
                'nom' => 'erotic',
            ),
            26 =>
            array (
                'id_genre' => 26,
                'nom' => 'karate',
            ),
            27 =>
            array (
                'id_genre' => 27,
                'nom' => 'program',
            ),
            28 =>
            array (
                'id_genre' => 28,
                'nom' => 'family',
            ),
            29 =>
            array (
                'id_genre' => 29,
                'nom' => 'expérimental',
            ),
        ));


    }
}