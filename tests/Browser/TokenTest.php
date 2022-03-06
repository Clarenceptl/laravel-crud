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
        try{
            $user = User::factory()->create([   //créer un utilisateur admin
                'email' => 'taylor@laravel.com',
                'name'=> 'name',
                'utype' => 'admin'
            ]);
            $this->browse(function ($browser) use ($user) {
                $browser->loginAs($user)
                    ->visit('/getfreetoken')
                    ->assertSee('Hello '.$user->name)
                    ->press('Argent facile')
                    ->assertPathIs('/getfreetoken')
                    ->waitForText('+ 50 balles pour monsieur')
                    ->assertSee('Jeton: 50');
            });
        }finally{
            $user->delete();
        }
    }
}