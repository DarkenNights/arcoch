<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('order')->delete();
        setlocale(LC_TIME, 'French');

        \App\Order::create([
            'product_id' => 1,
            'quantity' => 0,
            'price' => 0,
        ]);
    }
}
