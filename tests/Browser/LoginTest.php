<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }
    /**
     *  Login/logout admin test.
     *
     * @return void
     */

    public function testLoginAndLogout()
    {
        $user = User::factory()->create([   //créer un utilisateur admin
            'email' => 'taylor@laravel.com',
            'utype' =>'admin'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/')
                    ->logout();
        });
    }
}
