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
        // $this->call(UsersTableSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(LossSeeder::class);
    }
}
