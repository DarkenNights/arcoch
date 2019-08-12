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
            'start' => \Illuminate\Support\Carbon::create(2019, 12, 01, 19, 0, 0),
            'end' => \Illuminate\Support\Carbon::create(2019, 12, 01, 23, 0, 0),
            'place' => 'Arcoch',
            'highlight' => false
        ]);
    }
}
