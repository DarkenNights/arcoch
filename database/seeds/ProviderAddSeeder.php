<?php

use Illuminate\Database\Seeder;

class ProviderAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Provider::create([
            'name' => 'Kanata',
            'short_name' => 'kanata',
            'color' => '#cdd5d9',
            'email' => 'pro.a@kanata.fr',
            'franco' => 300,
            'address' => '1 Rue Louis Lefèvre Utile 56000 VANNES ',
            'order_day' => '',
            'shipping_day' => '',
            'commercial' => 'Angélique',
            'phone' => '02 97 68 15 27 - 06 95 34 17 27'
        ]);
    }
}
