<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('product')->delete();
        setlocale(LC_TIME, 'French');

        /*============================
        FOREZIA
        ============================*/
        \App\Product::create([
            'name' => 'Smoked meat',
            'reference' => '41046',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bresaola',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bacon Crispy',
            'reference' => '41049',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.85,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Effiloché de porc mariné',
            'reference' => '41066',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 2.6,
            'conditioning_per_carton' => 20,
            'price' => 1.35,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saucisse fumé',
            'reference' => '41071',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 0,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon blanc',
            'reference' => '41058',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon cru fôret noir',
            'reference' => '41003',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon serrano bodega',
            'reference' => '41008',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce curry',
            'reference' => '43019',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce ceasar',
            'reference' => '43013',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Croûtons',
            'reference' => '44072',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cramberries',
            'reference' => '44579',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Pommes caramélisées',
            'reference' => '44409',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Mélange de graines',
            'reference' => '44750',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Compotée d\'oignons',
            'reference' => '36149',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Miel',
            'reference' => '46701',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Moutarde au miel',
            'reference' => '43122',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette moutarde',
            'reference' => '43080',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette ketchup',
            'reference' => '43075',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette mayo',
            'reference' => '43077',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce au bleu',
            'reference' => '43003',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce chocolat noisette',
            'reference' => '36084',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saumon cuit effeuilé',
            'reference' => '60800',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Calamars a la bière',
            'reference' => '60511',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cranberries enrobés de chocolats',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        /*============================
        PLANETE BISON
        ============================*/
        \App\Product::create([
            'name' => 'Fromage en grain',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Chili de bison',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Gelée d\'érable',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Sirop d\'érable',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Confiture de bleuet',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 2
        ]);

    }
}
