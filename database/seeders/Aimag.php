<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Aimag extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aimags')->insert([
            [   'id' => 1,
                'aimag_ner' => 'Uvurkhangai'],
            [   'id' => 2,
                'aimag_ner' => 'Arkhangai'],
            [   'id' => 3,
                'aimag_ner' => 'Dundgovi'],
            [   'id' => 4,
                'aimag_ner' => 'Bayn-ulgii'],
            [   'id' => 5,
                'aimag_ner' => 'Erdenet'],
        ]);
    }
}
