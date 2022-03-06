<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TokenTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }
    /**
     *  Index working test.
     *
     * @return void
     */
    public function testGetFreeToken()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'utype' => 'admin'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/getfreetoken')
                ->assertSee('Hello '.$user->name)
                ->press('Argent facile')
                ->assertPathIs('/getfreetoken')
                ->waitForText('+ 50 balles pour monsieur')
                ->assertSee('Jeton: 50')
                ->logout();
        });
    }
}