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
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.93,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bresaola',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.55,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bacon Crispy',
            'reference' => '41049',
            'stock' => 0,
            'buffer' => 8,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.85,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Effiloché de porc mariné',
            'reference' => '41066',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.41,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saucisse fumé',
            'reference' => '41071',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.65,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon blanc',
            'reference' => '41058',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 6.74,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon serrano bodega',
            'reference' => '41008',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.28,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce curry',
            'reference' => '43019',
            'stock' => 12,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.17,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce ceasar',
            'reference' => '43013',
            'stock' => 4,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.05,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Croûtons',
            'reference' => '44072',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.03,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cramberries',
            'reference' => '44579',
            'stock' => 0,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.85,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Pommes caramélisées',
            'reference' => '44409',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.25,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Mélange de graines',
            'reference' => '44450',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 8.51,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Compotée d\'oignons',
            'reference' => '36149',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.3,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Miel',
            'reference' => '46701',
            'stock' => 4,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.83,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette moutarde',
            'reference' => '43080',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.82,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette ketchup',
            'reference' => '43075',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 50.2,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette mayo',
            'reference' => '43077',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 23.8,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce au bleu',
            'reference' => '43003',
            'stock' => 14,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.61,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce chocolat noisette',
            'reference' => '36084',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.83,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cranberries enrobés de chocolats',
            'reference' => '',
            'stock' => 9,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 0,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cream Cheese',
            'reference' => '44255',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 10.18,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe petits pois',
            'reference' => '36071',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.88,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe carottes',
            'reference' => '36070',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.88,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe potiron',
            'reference' => '36074',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.88,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe courgette',
            'reference' => '36073',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.88,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Effiloché de boeuf',
            'reference' => '41020',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1.2,
            'conditioning_per_carton' => 1,
            'price' => 9.48,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saumon cuit effeuilé',
            'reference' => '60800',
            'stock' => 0,
            'buffer' => 5,
            'quantity_per_carton' => 5,
            'conditioning_per_carton' => 5,
            'price' => 22.86,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Calamars a la bière',
            'reference' => '60511',
            'stock' => 0,
            'buffer' => 10,
            'quantity_per_carton' => 5,
            'conditioning_per_carton' => 10,
            'price' => 6.06,
            'provider_id' => 1
        ]);

        /*============================
        PLANETE BISON
        ============================*/
        \App\Product::create([
            'name' => 'Fromage en grain',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 10.90,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Chili de bison',
            'reference' => '',
            'stock' => 30,
            'buffer' => 50,
            'quantity_per_carton' => 6,
            'conditioning_per_carton' => 6,
            'price' => 4.3,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Gelée d\'érable',
            'reference' => '',
            'stock' => 10,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 2.7,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Sirop d\'érable',
            'reference' => '',
            'stock' => 6,
            'buffer' => 6,
            'quantity_per_carton' => 6,
            'conditioning_per_carton' => 6,
            'price' => 12.2,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Confiture de bleuet',
            'reference' => '',
            'stock' => 9,
            'buffer' => 6,
            'quantity_per_carton' => 6,
            'conditioning_per_carton' => 6,
            'price' => 2.35,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Saint Ambroise Abricot',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.35,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Saint Ambroise Erable',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.35,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Unibroue Raftman',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.55,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Unibroue 3 pistols',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.60,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Unibroue Don de Dieu',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.60,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Unibroue Fin du Monde',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.60,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Pisse du Caribou',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 2.95,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'La rousse du Trappeur',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 2.95,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'Moosehead',
            'reference' => '',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 24,
            'conditioning_per_carton' => 24,
            'price' => 1.10,
            'provider_id' => 2
        ]);

        \App\Product::create([
            'name' => 'La trappeur de noël',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 2.95,
            'provider_id' => 2
        ]);

        /*============================
        BONCOGEL
        ============================*/
        \App\Product::create([
            'name' => 'Jarreton à la bière',
            'reference' => '4049',
            'stock' => 0,
            'buffer' => 30,
            'quantity_per_carton' => 2,
            'conditioning_per_carton' => 2,
            'price' => 6.99,
            'price_kg' => 3.50,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace vanille 5L',
            'reference' => '9569',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 37.8,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace menthe chocolat',
            'reference' => '',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace marron glacé',
            'reference' => '',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace barbe à papa',
            'reference' => '',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace chocolat',
            'reference' => '9520',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace amarena',
            'reference' => '9570',
            'stock' => 2,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace spéculoos',
            'reference' => '',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace nougat',
            'reference' => '9564',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet fraise',
            'reference' => '9534',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet mangue',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet cactus citron vert',
            'reference' => '',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet myrtille sauvage',
            'reference' => '9264',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.9,
            'price_kg' => 7.56,
            'provider_id' => 3
        ]);

        /*============================
        BRAKE
        ============================*/
        \App\Product::create([
            'name' => 'Frites',
            'reference' => '74636',
            'stock' => 0,
            'buffer' => 24,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.13,
            'price_kg' => 1.65,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Poêlée méditerranéenne aux légumes grillés',
            'reference' => '70008',
            'stock' => 0,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 9.25,
            'price_kg' => 3.70,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Tomme de la montagne grise affinée',
            'reference' => '80113',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 26.9,
            'price_kg' => 7.45,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Tomme des pyrénées',
            'reference' => '80336',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 63.69,
            'price_kg' => 9.55,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Ketchup en bidon',
            'reference' => '17594',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.34,
            'price_kg' => 1.47,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Aiguillettes de poulet corn flakes',
            'reference' => '75512',
            'stock' => 0,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 42,
            'price_kg' => 8.4,
            'provider_id' => 4
        ]);

        /*============================
        THE THEODORE
        ============================*/
        \App\Product::create([
            'name' => 'Earl grey royal',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Travel to India',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Sans doute',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Traditionnel nanah marocco',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Jardin d\'Alix',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Marabout',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'O. Bancha Arashiyama',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Strong british Breakfast',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Tisane de l\'abbaye',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Les herbes insolentes',
            'reference' => '',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'price_kg' => 0.32,
            'provider_id' => 5
        ]);

        /*============================
        CIE DES DESSERTS
        ============================*/
        \App\Product::create([
            'name' => 'Baba au rhum koughloff',
            'reference' => '90605',
            'stock' => 3,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 25.2,
            'price_kg' => 2.30,
            'provider_id' => 6
        ]);

        \App\Product::create([
            'name' => 'Chocolatine',
            'reference' => '96112',
            'stock' => 3,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 33.84,
            'price_kg' => 0.49,
            'provider_id' => 6
        ]);

        \App\Product::create([
            'name' => 'Croissant',
            'reference' => '96119',
            'stock' => 3,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 31.7,
            'price_kg' => 0.46,
            'provider_id' => 6
        ]);

        /*============================
        ALAIN MILLAT
        ============================*/
        \App\Product::create([
            'name' => 'Confiture de tomate verte',
            'reference' => '',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 24,
            'price_kg' => 13.34,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Configutre fraise',
            'reference' => 'MUKDK2FR',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18,
            'price_kg' => 10,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture abricot',
            'reference' => 'MUKDK2BB',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18,
            'price_kg' => 10,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture myrtille',
            'reference' => 'MUKDK2MY',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 24,
            'price_kg' => 13.33,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture figue violette',
            'reference' => 'MUKDK2FI',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 21.6,
            'price_kg' => 12,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus de tomate',
            'reference' => 'MILJT33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.92,
            'price_kg' => 5.82,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus de pamplemousse',
            'reference' => 'MILJPAMROS33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.92,
            'price_kg' => 5.82,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus d\'abricot',
            'reference' => 'MILNAB33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.51,
            'price_kg' => 4.58,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus de pomme',
            'reference' => 'MILJPCOX33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.92,
            'price_kg' => 5.82,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus de pêche',
            'reference' => 'MILNPV33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.92,
            'price_kg' => 5.82,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Jus de raisin',
            'reference' => 'MILJRRMERLOT33',
            'stock' => 1,
            'buffer' => 12,
            'quantity_per_carton' => 12,
            'conditioning_per_carton' => 12,
            'price' => 1.92,
            'price_kg' => 5.82,
            'provider_id' => 7
        ]);

        /*============================
        METRO
        ============================*/
        \App\Product::create([
            'name' => 'Lait 1/2 écrémé',
            'reference' => '80001',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.15,
            'price_kg' => 0.69,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Lait entier',
            'reference' => '80265',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 5.06,
            'price_kg' => 0.85,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Oignon rouge',
            'reference' => '712875',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.16,
            'price_kg' => 1.44,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Emmental râpé',
            'reference' => '207259',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.25,
            'price_kg' => 5.63,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Camembert',
            'reference' => '168944',
            'stock' => 0,
            'buffer' => 30,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.65,
            'price_kg' => 6.6,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Salade',
            'reference' => '6234',
            'stock' => 0,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.76,
            'price_kg' => 2.76,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Noix',
            'reference' => '152447',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.45,
            'price_kg' => 11.45,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Noix de pecan',
            'reference' => '152516',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.44,
            'price_kg' => 26.88,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cornichons',
            'reference' => '241997',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.27,
            'price_kg' => 3.43,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oignon frits',
            'reference' => '95668',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.33,
            'price_kg' => 6.66,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Parmesan',
            'reference' => '174402',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 13.31,
            'price_kg' => 26.62,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oeuf',
            'reference' => '231243',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 17.59,
            'price_kg' => 0.2,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pain de mie complet',
            'reference' => '44618',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1.15,
            'price_kg' => 2.1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Croûtons',
            'reference' => '231986',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.7,
            'price_kg' => 5.4,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Bûche de chèvre',
            'reference' => '236227',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 6,
            'conditioning_per_carton' => 6,
            'price' => 11.59,
            'price_kg' => 9.66,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Chocolat poudre',
            'reference' => '2230',
            'stock' => 4,
            'buffer' => 10,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 7.58,
            'price_kg' => 7.58,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cacao poudre',
            'reference' => '22642',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.52,
            'price_kg' => 10.08,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oreo brisure',
            'reference' => '68519',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.75,
            'price_kg' => 9.38,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Granola brisure',
            'reference' => '182672',
            'stock' => 1,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 6.16,
            'price_kg' => 15.4,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Spéculoos brisure',
            'reference' => '37460',
            'stock' => 4,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.73,
            'price_kg' => 4.98,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pépite caramélisée',
            'reference' => '100215',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 10.71,
            'price_kg' => 19.84,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Smarties',
            'reference' => '116346',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 11.85,
            'price_kg' => 13.62,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Ours au chocolat',
            'reference' => '247356',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 15.70,
            'price_kg' => 0.1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Crème fraîche',
            'reference' => '17521',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 2.61,
            'price_kg' => 4.35,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Beurre doux',
            'reference' => '6223',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.10,
            'price_kg' => 6.2,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Beurre demi sel',
            'reference' => '12384',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.10,
            'price_kg' => 6.2,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Farine',
            'reference' => '242287',
            'stock' => 23,
            'buffer' => 18,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 3.62,
            'price_kg' => 0.61,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sucre roux',
            'reference' => '247887',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 12.92,
            'price_kg' => 2.59,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sucre blanc',
            'reference' => '247300',
            'stock' => 17,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.82,
            'price_kg' => 0.81,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Levure',
            'reference' => '73726',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 4.29,
            'price_kg' => 4.29,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cigarette',
            'reference' => '200600',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 19.98,
            'price_kg' => 0.08,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cacahuète en seau',
            'reference' => '179898',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 15.37,
            'price_kg' => 5.13,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nougats',
            'reference' => '62239',
            'stock' => 3,
            'buffer' => 8,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 12.59,
            'price_kg' => 0.12,
            'provider_id' => 8
        ]);
    }
}
