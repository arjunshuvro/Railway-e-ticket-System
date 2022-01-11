<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route1=new Route();
        $route1->from="Dhanmondi";
        $route1->to="Asadgate";
        $route1->toll="0";
        $route1->save();

        $route2=new Route();
        $route2->from="Asadgate";
        $route2->to="Farmgate";
        $route2->toll="0";
        $route2->save();

        $route3=new Route();
        $route3->from="Asadgate";
        $route3->to="Farmgate";
        $route3->toll="0";
        $route3->save();

        $route4=new Route();
        $route4->from="Farmgate";
        $route4->to="Mohakhali";
        $route4->toll="0";
        $route4->save();

        $route5=new Route();
        $route5->from="Mohakhali";
        $route5->to="Uttara";
        $route5->toll="0";
        $route5->save();

        

    
    }
}
