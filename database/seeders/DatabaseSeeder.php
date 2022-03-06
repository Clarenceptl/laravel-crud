<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Film::factory(50)->create(1);
        $this->call(DistributeursTableSeeder::class);
        $this->call(EmployesTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(FonctionsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(PersonnesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SallesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
