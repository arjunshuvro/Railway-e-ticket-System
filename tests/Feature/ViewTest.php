<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example ggs.
     *
     * @return void
     */

    /** @test */
    public function test_a_welcome_view_can_be_rendered()
    {
        $view = $this->view('Welcome');

        $view->assertSee('BANGLADESH RAILWAY E-TICKETING SERVICE');
    }
    /** @test */
    public function test_a_panel_view_can_be_rendered()
    {
        $view = $this->view('panel.adminpanel');

        $view->assertSee('E-ticket - Panel');
    }
}
