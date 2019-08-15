<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('event')->delete();
        setlocale(LC_TIME, 'French');

        \App\Event::create([
            'title' => 'Titre 1',
            'text' => 'Texte 1',
            'start' => \Illuminate\Support\Carbon::create(2019, 8, 14, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 12, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => true
        ]);

        \App\Event::create([
            'title' => 'Titre 2',
            'text' => 'Texte 2',
            'start' => \Illuminate\Support\Carbon::create(2019, 8, 15, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 15, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => true
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2019, 8, 16, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2019, 9, 16, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2019, 10, 16, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2019, 11, 16, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2019, 12, 16, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);

        \App\Event::create([
            'title' => 'Titre 3',
            'text' => 'Texte 2=3',
            'start' => \Illuminate\Support\Carbon::create(2020, 01, 12, 19, 0, 0)->locale('fr_FR'),
            'end' => \Illuminate\Support\Carbon::create(2019, 9, 01, 23, 0, 0)->locale('fr_FR'),
            'place' => 'Arcoch',
            'creator' => "L'Arcoch",
            'highlight' => false
        ]);
    }
}
