<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class IndexTest extends DuskTestCase
{
    /**
     *  Index working test.
     *
     * @return void
     */
    public function testIndexOk()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->loginAs(User::find(1))
        //             ->visit('/')
        //             ->assertSee('Bienvenue sur la page d\'accueil')
        //             ->clickLink('ici')
        //             ->assertPathIs('/films');

        // });
    }
}