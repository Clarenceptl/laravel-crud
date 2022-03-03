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
}
