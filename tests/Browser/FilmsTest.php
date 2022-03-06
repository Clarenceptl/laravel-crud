<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class FilmsTest extends DuskTestCase
{
    use DatabaseMigrations;


    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    /**
     *  testFilmListIntoSpecificFilm.
     *
     * @return void
     */
    public function testFilmListIntoSpecificFilm(): void
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'name'=> 'name',
            'utype' => 'admin'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/films')
                ->assertPresent('@film-list')
                ->assertSeeIn("@film-1", 'Détail')
                ->click('@film-link-1')
                ->assertPathIs('/film/1')
                ->assertSee('Réserver le film Goodfellas')
                ->logout(); //FAUT CLIQUER SUR LE DETAILS DU PREMIER ELEMENT
           });
    }

    public function testDeleteFilm()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'name'=> 'name',
            'utype' => 'admin'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/films')
                ->assertPresent('@film-list')
                ->assertSeeIn("@film-3", 'Supprimer')
                ->click('@film-delete-3')
                ->assertPathIs('/films')
                ->assertSee('Le film a bien été supprimé.')
                ->logout();
           });
    }

    public function testBuyFilm()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'name'=> 'name',
            'utype' => 'admin'
        ]);
        $user->jeton = 1000;
        $user->save();

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/film/2')
                ->assertSee('Réserver le film Wild at Heart')
                ->press('+ Ajouter au panier')
                ->assertPathIs('/panier')
                ->assertSee('Produit ajouté au panier')
                ->click('@payCart')
                ->assertPathIs('/panier/paiement')
                ->assertSee('Récapitulatif de paiement')
                ->press('Payer')
                ->assertPathIs('/panier/paiement')
                ->assertSee('Panier vidé')
                ->assertSee('Aucun produit à payer')
                ->logout();
            });
    }


    public function testCreateFilm()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'name'=> 'name',
            'utype' => 'admin'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/create_movie')
                ->assertSee('Enregistrer')
                ->type('title','montitre')
                ->attach('image', base_path('public/images/1627304338-Hello.jpg'))
                ->type('description','superbedescription')
                ->type('display_date','09/09/2024')
                ->type('end_display_date','10/09/2024')
                ->type('duration','124')
                ->type('production_date','2000')
                ->type('price','20')
                ->press('Enregistrer')
                ->assertPathIs('/films')
                ->assertSee('Le film a bien été créé.')
                ->logout();
            });
    }


    public function testNoTokenBuyFilm()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'name'=> 'name',
            'utype' => 'admin'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/film/2')
                ->assertSee('Réserver le film Wild at Heart')
                ->press('+ Ajouter au panier')
                ->assertPathIs('/panier')
                ->assertSee('Produit ajouté au panier')
                ->click('@payCart')
                ->assertPathIs('/panier/paiement')
                ->assertSee('Récapitulatif de paiement')
                ->press('Payer')
                ->assertPathIs('/panier')
                ->assertSee('Pas assez de jeton')
                ->logout();
            });
    }
}
