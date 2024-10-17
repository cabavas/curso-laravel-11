<?php

use Laravel\Dusk\Browser;

it('has  page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('');
    });
});
