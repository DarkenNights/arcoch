<?php

use Illuminate\Database\Seeder;

class ProductAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setlocale(LC_TIME, 'French');

        /*============================
        METRO
        ============================*/
        \App\Product::create([
            'name' => 'Papier aluminium',
            'reference' => '179194',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 16.37,
            'price_kg' => 16.37,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Serviette jetable x50',
            'reference' => '201254',
            'stock' => 10,
            'buffer' => 10,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.14,
            'price_kg' => 0.04,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Serviette jetable x200',
            'reference' => '239572',
            'stock' => 4,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.49,
            'price_kg' => 0.02,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Paille',
            'reference' => '242998',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.88,
            'price_kg' => 0.006,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Mascarpone 500g',
            'reference' => '90059',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.66,
            'price_kg' => 7.32,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Crème anglaise 2L',
            'reference' => '236366',
            'stock' => 4,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.28,
            'price_kg' => 2.64,
                'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Chantilly 700mL Debic',
            'reference' => '252072',
            'stock' => 13,
            'buffer' => 15,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 6.59,
            'price_kg' => 9.42,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Vinaigre de cidre 1L',
            'reference' => '159256',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.23,
            'price_kg' => 2.23,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Huile d\'olive 5L',
            'reference' => '182701',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 25.38,
            'price_kg' => 5.08,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Huilde tournesol bidon 25L',
            'reference' => '11163',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 34.70,
            'price_kg' => 1.39,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Huile de tournesol 10L',
            'reference' => '74046',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 14.09,
            'price_kg' => 1.41,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Persil émincé 120g',
            'reference' => '241941',
            'stock' => 2,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.53,
            'price_kg' => 29.42,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Copeaux de chocolat',
            'reference' => '210836',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.46,
            'price_kg' => 13.46,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nutella 6kg',
            'reference' => '215451',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 35.81,
            'price_kg' => 5.97,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Palet ganache chocolat noir',
            'reference' => '217738',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 48.55,
            'price_kg' => 4.86,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nutella mini-pot 25g',
            'reference' => '249511',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 33.62,
            'price_kg' => 21.02,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Bloc de commande',
            'reference' => '85397',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.03,
            'price_kg' => 1.11,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Film étirable transparent',
            'reference' => '217622',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.67,
            'price_kg' => 13.67,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Orange',
            'reference' => '30076',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.21,
            'price_kg' => 1.11,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Raisin',
            'reference' => '30436',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.27,
            'price_kg' => 1.66,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Citron',
            'reference' => '710672',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.65,
            'price_kg' => 1.1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nettoyant désinfectant sanitaires',
            'reference' => '149420',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 6.48,
            'price_kg' => 8.64,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nettoyant cuisine',
            'reference' => '149421',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.87,
            'price_kg' => 4.87,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sopalin',
            'reference' => '183109',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 15.47,
            'price_kg' => 15.47,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Liquide de plonge',
            'reference' => '192536',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.67,
            'price_kg' => 11.67,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nettoyan sol PH neutre 5L',
            'reference' => '192581',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.53,
            'price_kg' => 9.53,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pastilles de javel',
            'reference' => '192699',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.99,
            'price_kg' => 9.99,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Gel déboucheur',
            'reference' => '197028',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.66,
            'price_kg' => 1.66,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Papier toilette',
            'reference' => '193030',
            'stock' => 2,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.37,
            'price_kg' => 5.37,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Eponges',
            'reference' => '193154',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.18,
            'price_kg' => 11.18,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Gant jetable taille M',
            'reference' => '195055',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.11,
            'price_kg' => 4.11,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Tablette lave-vaisselle',
            'reference' => '29229',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 31.32,
            'price_kg' => 31.32,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Solivaiselle rinçage séchage 5L',
            'reference' => '4686',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 22.74,
            'price_kg' => 22.74,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Lave vitre',
            'reference' => '21898',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.43,
            'price_kg' => 1.43,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sacs poubelles',
            'reference' => '225661',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.76,
            'price_kg' => 2.76,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Crème lavante',
            'reference' => '235361',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.2,
            'price_kg' => 9.2,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nettoyant poudre friteuse 1Kg',
            'reference' => '96902',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.73,
            'price_kg' => 8.73,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Liquide vaisselle 5L',
            'reference' => '243386',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 10.70,
            'price_kg' => 10.70,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Eponge spiral Inox',
            'reference' => '244284',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.48,
            'price_kg' => 9.48,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nettoyant gel WC Lacroix',
            'reference' => '158761',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.29,
            'price_kg' => 1.29,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sucre glace',
            'reference' => '173788',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.63,
            'price_kg' => 1.88,
            'provider_id' => 8
        ]);
    }
}
