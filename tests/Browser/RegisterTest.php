<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class RegisterTest extends DuskTestCase
{
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
                    ->assertPathIs('/');
        });

        User::where("email",'test1@test.com')->first()->delete();
    }

    /**
     * A Dusk register failed test.
     *
     * @return void
     */
    public function testRegisterFail()
    {
        try{
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
        }finally{
            $user->delete();
        }
    }
}
