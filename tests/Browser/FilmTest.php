<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class FilmTest extends DuskTestCase
{
    /**
     *  Index working test.
     *
     * @return void
     */
    public function testFilm()
    {
        try{
            $user = User::factory()->create([   //créer un utilisateur admin
                'email' => 'taylor@laravel.com',
                'name'=> 'name',
                'utype' => 'admin'
            ]);
            /*$user->jeton = 1000;
            $user->save();
            ->press('+ Ajouter au panier')
            ->waitForText('/panier')

            ->waitForText('Back to the Future Part III');*/
            $this->browse(function ($browser) use ($user) {
                $browser->loginAs($user)
                    ->visit('/film')
                    ->assertPresent('@film-list');
            });
        }finally{
            $user->delete();
        }
    }
}