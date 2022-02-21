<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Email');
                    // ->loginAs(User::find(1))
                    // ->assertVisible('#filmList')
                    // ->visit(
                    //     $browser->attribute('#filmList', 'href')
                    // )
                    // ->assertPathIs('/films');
        });
    }
}
