<?php

use Illuminate\Database\Seeder;

class ProductAdd2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*============================
        PLANETE BISON
        ============================*/
        \App\Product::create([
            'name' => 'Bec-Cola érable',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.75,
            'price_kg' => 1.75,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Bec-Cola canneberge',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.75,
            'price_kg' => 1.75,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Bec-Cola limon',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.75,
            'price_kg' => 1.75,
            'provider_id' => 2
        ]);

        /*============================
        KANATA
        ============================*/
        \App\Product::create([
            'name' => 'Alchimiste Blanche',
            'reference' => '',
            'stock' => 0,
            'buffer' => 48,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.64,
            'price_kg' => 1.64,
            'provider_id' => 9
        ]);

        \App\Product::create([
            'name' => 'Alchimiste IPA',
            'reference' => '',
            'stock' => 0,
            'buffer' => 48,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.67,
            'price_kg' => 1.67,
            'provider_id' => 9
        ]);

        \App\Product::create([
            'name' => 'Alchimiste Stout',
            'reference' => '',
            'stock' => 0,
            'buffer' => 48,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.60,
            'price_kg' => 2.60,
            'provider_id' => 9
        ]);
    }
}
