<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $driver1=new Driver();
        $driver1->name="Sohag";
        $driver1->phone="01711223344";
        $driver1->nid="000000001";
        $driver1->save();

        $driver2=new Driver();
        $driver2->name="Dulal";
        $driver2->phone="01711223345";
        $driver2->nid="000000002";
        $driver2->save();

        $driver3=new Driver();
        $driver3->name="Nannu";
        $driver3->phone="01711223346";
        $driver3->nid="000000003";
        $driver3->save();

        $driver4=new Driver();
        $driver4->name="Shamol";
        $driver4->phone="01711223347";
        $driver4->nid="000000004";
        $driver4->save();

        $driver5=new Driver();
        $driver5->name="Rafid";
        $driver5->phone="01711223348";
        $driver5->nid="000000005";
        $driver5->save();

    }
}
