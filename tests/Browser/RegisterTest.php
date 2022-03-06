<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }
    /**
     * A Dusk register test.
     *
     * @return void
     */
    public function testRegister()
    {

        $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->type('name', 'Nom prénom')
                    ->type('email', 'test1@test.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->click('button')
                    ->assertPathIs('/')
                    ->logout();
        });
    }

    /**
     * A Dusk register failed test.
     *
     * @return void
     */
    public function testRegisterFail()
    {
        $user = User::factory()->create([   //créer un utilisateur user
            'email' => 'register@laravel.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/register')
                    ->type('name', 'Nom prénom')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->click('button')
                    ->assertSee('Whoops! Something went wrong')
                    ->assertSee('The email has already been taken.');

        });
    }
}
