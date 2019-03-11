<?php

use Illuminate\Database\Seeder;
use GTImports\Status;
use GTImports\Auctions;

class AuctionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_pending = Status::where('name', 'Pending')->first();
        $status_prepare = Status::where('name', 'Preparing')->first();
        $status_shipping = Status::where('name', 'Shipping')->first();
        $status_ready = Status::where('name', 'Shipped')->first();

        $pending = new Auctions();
        $pending->title = 'Nissan Silvia Spec R';
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
        $pending->status()->attach($status_pending);

        $pendingTo = new Auctions();
        $pendingTo->title = 'Toyota GT86';
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
        $pendingTo->status()->attach($status_pending);

        $pendingTr = new Auctions();
        $pendingTr->title = 'Toyota Chaser Tourer V';
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
        $pendingTr->status()->attach($status_pending);

        $pendingTa = new Auctions();
        $pendingTa->title = 'Mazda RX-7 Spirit R Type A';
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
        $pendingTa->status()->attach($status_pending);

        $pendingTz = new Auctions();
        $pendingTz->title = 'Toyota MR2 GT-S';
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
        $pendingTz->status()->attach($status_pending);

        $pendingTo = new Auctions();
        $pendingTo->title = 'Honda Civic Type-R EK9';
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
        $pendingTo->status()->attach($status_pending);
    }
}
