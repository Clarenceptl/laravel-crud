<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class IndexTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }
    /**
     *  Index working test.
     *
     * @return void
     */
    public function testIndexOk()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'utype' =>'admin'
        ]);

        $this->browse(function (Browser $browser) use ($user) {
        $browser->loginAs($user)
                ->visit('/')
                ->assertSee('Bienvenue sur la page d\'accueil')
                ->clickLink('ici')
                ->assertPathIs('/films')
                ->logout();
        });
    }
}