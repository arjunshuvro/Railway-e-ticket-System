<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Driver;
use App\Models\Route;
use App\Models\User;

class ModelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    /**
     * @test
     */
    public function create_driver_test()
    {
        $this->withoutExceptionHandling();
        $driver = Driver::factory(1)->create();
        $this->assertEquals(Driver::all()->count(),1,'Match');

        // Use model in tests...
    }
    /**
     * @test
     */
    public function create_user_test()
    {
        $this->withoutExceptionHandling();
        $user = User::factory(1)->create();
        $this->assertEquals(User::all()->count(),1,'Match');

       
    }
    /**
     * @test
     */
    public function create_route_test()
    {
        $this->withoutExceptionHandling();
        $route = Route::factory(2)->create();
        $this->assertEquals(Route::all()->count(),2,'Match');

       
    }
}
