<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(StatusesTable::class);
        $this->call(AuctionsTable::class);
        $this->call(ShowroomsTable::class);
        $this->call(BlogsTable::class);
    }
}
