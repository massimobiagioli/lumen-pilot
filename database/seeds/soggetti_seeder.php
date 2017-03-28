<?php

use Illuminate\Database\Seeder;

class soggetti_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soggetti')->insert([
            'nominativo' => 'Mario Rossi',
            'indirizzo' => 'via roma 1, Jesi(AN)'
        ]);
        DB::table('soggetti')->insert([
            'nominativo' => 'Anna Verdi',
            'indirizzo' => 'via milano 2, Apiro(MC)'
        ]);
    }
}
