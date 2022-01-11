<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function home_route_is_working()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /** @test */
    public function login_route_is_working()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /** @test */
    public function register_route_is_working()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    /** @test */
    public function incorrect_page_is_working(){
        $response=$this->get('/error404');
        $response->assertStatus(404);
    }
    /** @test */
    public function only_login_user_access_this_route()
    {
        
        $response = $this->get('/panel')
            ->assertRedirect('/login');
    }

    /** @test */
    public function only_admin_can_access_this_route()
    {
        $this->withoutExceptionHandling();
        $user = User::create([
            'name' => 'Arjun Suter',
            'email' => 'arjunsuter123@gmail.com',
            'password' => '11111111',
            'phone' => '01770250285',
            'nid'=>'1111',
            'role'=>'1'
        ]);
        $response = $this->actingAs($user)->get('/panel')
            ->assertOk();
    }
}
