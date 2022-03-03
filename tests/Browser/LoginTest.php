<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class LoginTest extends DuskTestCase
{
    /**
     *  Login test.
     *
     * @return void
     */

    public function test_login()
    {
        $user = User::factory()->create([
            'email' => 'taylor@laravel.com'
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/');
        });

        $user->delete();
    }
}
