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
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bresaola',
            'reference' => '42003',
            'stock' => 2,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Bacon Crispy',
            'reference' => '41049',
            'stock' => 0,
            'buffer' => 8,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Effiloché de porc mariné',
            'reference' => '41066',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 2.275,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saucisse fumé',
            'reference' => '41071',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 0,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon blanc',
            'reference' => '41058',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Jambon serrano bodega',
            'reference' => '41008',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce curry',
            'reference' => '43019',
            'stock' => 12,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce ceasar',
            'reference' => '43013',
            'stock' => 4,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Croûtons',
            'reference' => '44072',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cramberries',
            'reference' => '44579',
            'stock' => 0,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Pommes caramélisées',
            'reference' => '44409',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Mélange de graines',
            'reference' => '44750',
            'stock' => 2,
            'buffer' => 4,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Compotée d\'oignons',
            'reference' => '36149',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Miel',
            'reference' => '46701',
            'stock' => 4,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette moutarde',
            'reference' => '43080',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette ketchup',
            'reference' => '43075',
            'stock' => 1,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Dosette mayo',
            'reference' => '43077',
            'stock' => 0,
            'buffer' => 1,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce au bleu',
            'reference' => '43003',
            'stock' => 14,
            'buffer' => 12,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Sauce chocolat noisette',
            'reference' => '36084',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cranberries enrobés de chocolats',
            'reference' => '',
            'stock' => 9,
            'buffer' => 3,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Cream Cheese',
            'reference' => '44255',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe petits poids',
            'reference' => '36071',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe carottes',
            'reference' => '36070',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe potiron',
            'reference' => '36074',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Soupe courgette',
            'reference' => '36073',
            'stock' => 0,
            'buffer' => 6,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Effiloché de boeuf',
            'reference' => '41020',
            'stock' => 0,
            'buffer' => 4,
            'quantity_per_carton' => 1.2,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Saumon cuit effeuilé',
            'reference' => '60800',
            'stock' => 0,
            'buffer' => 5,
            'quantity_per_carton' => 5,
            'conditioning_per_carton' => 5,
            'price' => 1,
            'provider_id' => 1
        ]);

        \App\Product::create([
            'name' => 'Calamars a la bière',
            'reference' => '60511',
            'stock' => 0,
            'buffer' => 10,
            'quantity_per_carton' => 5,
            'conditioning_per_carton' => 10,
            'price' => 1,
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
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace spéculoos',
            'reference' => '',
            'stock' => 0,
            'buffer' => 2,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 18.90,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Glace nougat',
            'reference' => '9564',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet fraise',
            'reference' => '9534',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet mangue',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet cactus citron vert',
            'reference' => '',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 3
        ]);

        \App\Product::create([
            'name' => 'Sorbet myrtille sauvage',
            'reference' => '9264',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 3
        ]);

        /*============================
        BRAKE
        ============================*/
        \App\Product::create([
            'name' => 'Frites',
            'reference' => '74636',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Poêlée méditerranéenne aux légumes grillés',
            'reference' => '70008',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Tomme de la montagne grise affinée',
            'reference' => '80113',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 4
        ]);

        \App\Product::create([
            'name' => 'Tomme des pyrénées',
            'reference' => '80336',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 4
        ]);

        /*============================
        THE THEODORE
        ============================*/
        \App\Product::create([
            'name' => 'Earl grey royal',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Travel to India',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Sans doute',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Traditionnel nanah marocco',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Jardin d\'Alix',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Marabout',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'O. Bancha Arashiyama',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Strong british Breakfast',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Tisane de l\'abbaye',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        \App\Product::create([
            'name' => 'Les herbes insolentes',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 5
        ]);

        /*============================
        CIE DES DESSERTS
        ============================*/
        \App\Product::create([
            'name' => 'Baba au rhum koughloff',
            'reference' => '',
            'stock' => 3,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 6
        ]);

        /*============================
        ALAIN MILLAT
        ============================*/
        \App\Product::create([
            'name' => 'Confiture de tomate verte',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Configutre fraise',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture abricot',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture myrtille',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 7
        ]);

        \App\Product::create([
            'name' => 'Confiture figue violette',
            'reference' => '',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 7
        ]);

        /*============================
        METRO
        ============================*/
        \App\Product::create([
            'name' => 'Effiloché de boeuf',
            'reference' => '220257',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oignon rouge',
            'reference' => '711368',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Ketchup tube',
            'reference' => '36668',
            'stock' => 5,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Aiguillettes de poulet panées aux corns flakes',
            'reference' => '220664',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Emmental râpé',
            'reference' => '207259',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Camembert',
            'reference' => '168944',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Reblochon',
            'reference' => '6336',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Salade',
            'reference' => '6234',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Noix',
            'reference' => '152447',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Noix de pecan',
            'reference' => '152516',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Thym',
            'reference' => '49702',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Romarin',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Vin blanc',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cornichons',
            'reference' => '74636',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oignon frits',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Parmesan',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oeuf',
            'reference' => '169812',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pain de mie',
            'reference' => '44617',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Bûche de chèvre',
            'reference' => '236227',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Miel',
            'reference' => '74636',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Lait demi écrémé',
            'reference' => '247705',
            'stock' => 5,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Lait entier',
            'reference' => '247893',
            'stock' => 5,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Chocolat poudre',
            'reference' => '2230',
            'stock' => 4,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cacao poudre',
            'reference' => '22642',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Oreo brisure',
            'reference' => '68519',
            'stock' => 2,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Granola brisure',
            'reference' => '182672',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Spéculoos brisure',
            'reference' => '37460',
            'stock' => 4,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pépite caramélisée',
            'reference' => '100215',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Smarties',
            'reference' => '116346',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Ours au chocolat',
            'reference' => '247356',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Crème fraîche',
            'reference' => '17521',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Beurre doux',
            'reference' => '6223',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Beurre demi sel',
            'reference' => '12384',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Farine',
            'reference' => '242287',
            'stock' => 23,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sucre roux',
            'reference' => '247887',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Sucre blanc',
            'reference' => '247300',
            'stock' => 17,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pépite de chocolat patisserie',
            'reference' => '74636',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Brisure de chocolat noir',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Levure',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Pommes pour crumble',
            'reference' => '',
            'stock' => 0,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nutella',
            'reference' => '215451',
            'stock' => 3,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cigarette',
            'reference' => '200600',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Cacahuète',
            'reference' => '179898',
            'stock' => 1,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);

        \App\Product::create([
            'name' => 'Nougats',
            'reference' => '62239',
            'stock' => 3,
            'buffer' => 0,
            'quantity_per_carton' => 1,
            'conditioning_per_carton' => 1,
            'price' => 1,
            'provider_id' => 8
        ]);
    }
}
