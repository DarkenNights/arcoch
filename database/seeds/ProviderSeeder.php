<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('provider')->delete();
        setlocale(LC_TIME, 'French');

        \App\Provider::create([
            'name' => 'Forézia',
            'short_name' => 'forezia',
            'color' => '#417d8a',
            'email' => 'gaelle.chorot@foreziasnacking.fr',
            'franco' => 200,
            'address' => 'ZAC des Platières - 26 Chemin des Platières - 38670 Chasse-Sur-Rhône',
            'order_day' => 'Mardi',
            'shipping_day' => 'Jeudi',
            'commercial' => 'CHOROT Gaelle',
            'phone' => '04 78 35 02 85 - 06 34 28 33 58'
        ]);

        \App\Provider::create([
            'name' => 'Planète Bison',
            'short_name' => 'planeteBison',
            'color' => '#d57516',
            'email' => 'jolyw@wanadoo.fr',
            'franco' => 0,
            'address' => '« La Marquise » 70 180 Dampierre-sur-Salon',
            'order_day' => 'Dimanche et Mardi',
            'shipping_day' => 'Mardi et Jeudi',
            'commercial' => 'William JOLY',
            'phone' => '03 84 67 05 67 - 06 72 86 59 59',
            'order_message' => 'Toutes les quantités demandées sont à l\'unité.'
        ]);

        \App\Provider::create([
            'name' => 'Boncogel',
            'short_name' => 'boncogel',
            'color' => '#cf010b',
            'email' => '',
            'franco' => 0,
            'address' => '15 rue Jacques Choquard - ZI de Berhouague 40530 Labenne',
            'order_day' => 'Lundi et Jeudi',
            'shipping_day' => 'Mardi et Vendredi',
            'commercial' => 'William Salinas',
            'phone' => '06 81 96 38 91 - 05 59 55 84 07'
        ]);

        \App\Provider::create([
            'name' => 'Brake Sysco',
            'short_name' => 'brake',
            'color' => '#016836',
            'email' => 'david.COUNILLON@brake.fr',
            'franco' => 100,
            'address' => 'A Baylac - 32550 Montegut',
            'order_day' => 'Lundi et Jeudi',
            'shipping_day' => 'Mardi et Vendredi',
            'commercial' => 'David Counillon',
            'phone' => '04 78 66 38 00 - 06 88 12 69 60'
        ]);

        \App\Provider::create([
            'name' => 'Thé Théodore',
            'short_name' => 'theTheodore',
            'color' => '#000000',
            'email' => 'customer-service@sfto1842.com',
            'franco' => 0,
            'address' => 'BP34B – Z.I. RN 13 | F – 78270 BONNIÈRES SUR SEINE ',
            'order_day' => '',
            'shipping_day' => '',
            'commercial' => 'Hélène GOURNAY',
            'phone' => '01 34 77 85 88'
        ]);

        \App\Provider::create([
            'name' => 'Cie des desserts',
            'short_name' => 'cieDesDesserts',
            'color' => '#a10c5e',
            'email' => 'kevin.vauth@compagniedesdesserts.com',
            'franco' => 0,
            'address' => '4, Rue des Romains Z.I. des Corbières 11200 LEZIGNAN - CORBIERES',
            'order_day' => '',
            'shipping_day' => '',
            'commercial' => 'VAUTH Kévin',
            'phone' => '04 68 27 62 88 - 06 25 45 48 45'
        ]);

        \App\Provider::create([
            'name' => 'Alain Millat',
            'short_name' => 'alainMillat',
            'color' => '#6a574c',
            'email' => 'm.labrousse@alain-milliat.com',
            'franco' => 0,
            'address' => '17, allée James Joule 26000 VALENCE',
            'order_day' => '',
            'shipping_day' => '',
            'commercial' => 'Marjorie LABROUSSE',
            'phone' => '06 24 59 32 91'
        ]);

        \App\Provider::create([
            'name' => 'Metro',
            'short_name' => 'metro',
            'color' => '#1a3c7b',
            'email' => '',
            'franco' => 0,
            'address' => 'Zone Artisanale Bastillac Sud, 65000 Tarbes',
            'order_day' => 'Mardi',
            'shipping_day' => 'Jeudi',
            'commercial' => 'Sophie',
            'phone' => '0 825 09 09 09'
        ]);
    }
}
