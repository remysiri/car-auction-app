<?php

use Illuminate\Database\Seeder;
use GTImports\Showroom;

class ShowroomsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pending = new Showroom();
        $pending->title = 'Subaru Impreza Turbo 2000';
        $pending->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pending->price = '22341';
        $pending->miles = '55000';
        $pending->kilometres = '89000';
        $pending->model = 'Silvia';
        $pending->chassis = 'S15';
        $pending->manufacture = '2002';
        $pending->color = 'Active Red';
        $pending->fueltype = 'petrol';
        $pending->transmission = 'manual';
        $pending->exteriorfeature = 'alloy';
        $pending->interiorfeature = 'climate';
        $pending->safetyfeature = 'abs';
        $pending->audiofeature = 'cd';
        $pending->save();

        $pendingTo = new Showroom();
        $pendingTo->title = 'Rocket Bunny Nissan Silvia Spec R';
        $pendingTo->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pendingTo->price = '29000';
        $pendingTo->miles = '55000';
        $pendingTo->kilometres = '89000';
        $pendingTo->model = 'GT86';
        $pendingTo->chassis = 'ZN6';
        $pendingTo->manufacture = '2017';
        $pendingTo->color = 'Active Red';
        $pendingTo->fueltype = 'petrol';
        $pendingTo->transmission = 'manual';
        $pendingTo->exteriorfeature = 'alloy';
        $pendingTo->interiorfeature = 'climate';
        $pendingTo->safetyfeature = 'abs';
        $pendingTo->audiofeature = 'cd';
        $pendingTo->save();

        $pendingTr = new Showroom();
        $pendingTr->title = 'Datsun 240z';
        $pendingTr->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pendingTr->price = '13000';
        $pendingTr->miles = '55000';
        $pendingTr->kilometres = '89000';
        $pendingTr->model = 'GT86';
        $pendingTr->chassis = 'ZN6';
        $pendingTr->manufacture = '2017';
        $pendingTr->color = 'Active Red';
        $pendingTr->fueltype = 'petrol';
        $pendingTr->transmission = 'manual';
        $pendingTr->exteriorfeature = 'alloy';
        $pendingTr->interiorfeature = 'climate';
        $pendingTr->safetyfeature = 'abs';
        $pendingTr->audiofeature = 'cd';
        $pendingTr->save();

        $pendingTa = new Showroom();
        $pendingTa->title = 'Honda S2000 AP2';
        $pendingTa->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pendingTa->price = '35000';
        $pendingTa->miles = '55000';
        $pendingTa->kilometres = '89000';
        $pendingTa->model = 'GT86';
        $pendingTa->chassis = 'ZN6';
        $pendingTa->manufacture = '2017';
        $pendingTa->color = 'Active Red';
        $pendingTa->fueltype = 'petrol';
        $pendingTa->transmission = 'manual';
        $pendingTa->exteriorfeature = 'alloy';
        $pendingTa->interiorfeature = 'climate';
        $pendingTa->safetyfeature = 'abs';
        $pendingTa->audiofeature = 'cd';
        $pendingTa->save();

        $pendingTz = new Showroom();
        $pendingTz->title = 'Nissan Skyline R32 GTR Nismo Edition';
        $pendingTz->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pendingTz->price = '29000';
        $pendingTz->miles = '55000';
        $pendingTz->kilometres = '89000';
        $pendingTz->model = 'GT86';
        $pendingTz->chassis = 'ZN6';
        $pendingTz->manufacture = '2017';
        $pendingTz->color = 'Active Red';
        $pendingTz->fueltype = 'petrol';
        $pendingTz->transmission = 'manual';
        $pendingTz->exteriorfeature = 'alloy';
        $pendingTz->interiorfeature = 'climate';
        $pendingTz->safetyfeature = 'abs';
        $pendingTz->audiofeature = 'cd';
        $pendingTz->save();

        $pendingTo = new Showroom();
        $pendingTo->title = 'Nissan Fairlady 300ZX';
        $pendingTo->description = '<ul><li>High quality fresh import</li><li>Sought after Aerokit model</li><li>Late model</li><li>Rare active red</li><li>NISMO suspension</li><li>NISMO strut baar</li><li>NISMO anti roll bars</li><li>AV5 Alloys</li><li>Low mileage</li></ul>';
        $pendingTo->price = '29000';
        $pendingTo->miles = '55000';
        $pendingTo->kilometres = '89000';
        $pendingTo->model = 'GT86';
        $pendingTo->chassis = 'ZN6';
        $pendingTo->manufacture = '2017';
        $pendingTo->color = 'Active Red';
        $pendingTo->fueltype = 'petrol';
        $pendingTo->transmission = 'manual';
        $pendingTo->exteriorfeature = 'alloy';
        $pendingTo->interiorfeature = 'climate';
        $pendingTo->safetyfeature = 'abs';
        $pendingTo->audiofeature = 'cd';
        $pendingTo->save();
    }
}
