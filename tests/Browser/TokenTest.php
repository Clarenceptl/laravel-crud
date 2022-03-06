<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TokenTest extends DuskTestCase
{
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
                ->assertSee('Argent facile')
                ->click('Argent facile')
                ->assertPathIs('/getfreetoken')
                ->assertSee('+ 50 balles pour monsieur');
        });

        $user->delete();
    }
}