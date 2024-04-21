<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sum extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sums')->insert([
            [   'id' => 1,
                'sum_ner' => 'Bat-ulzii',
                'aimag_id' => 1],
            [   'id' => 2,
                'sum_ner' => 'Khujirt',
                'aimag_id' => 1],
            [   'id' => 3,
                'sum_ner' => 'Kharkhorin',
                'aimag_id' => 1],

            [   'id' => 4,
                'sum_ner' => 'Teel',
                'aimag_id' => 2],
            [   'id' => 5,
                'sum_ner' => 'Tsenkher',
                'aimag_id' => 2],
            [   'id' => 6,
                'sum_ner' => 'Darhan',
                'aimag_id' => 2],
            [   'id' => 7,
                'sum_ner' => 'Dundarga',
                'aimag_id' => 2],

                [   'id' => 8,
                'sum_ner' => 'Tsenkher',
                'aimag_id' => 3],
            [   'id' => 9,
                'sum_ner' => 'Tugshruuleh',
                'aimag_id' => 3],
            [   'id' => 10,
                'sum_ner' => 'Huiten',
                'aimag_id' => 3],
            [   'id' => 11,
                'sum_ner' => 'Shiwshee',
                'aimag_id' => 3],

                [   'id' => 12,
                'sum_ner' => 'Khargal',
                'aimag_id' => 4],
            [   'id' => 13,
                'sum_ner' => 'Tuw',
                'aimag_id' => 4],
            [   'id' => 14,
                'sum_ner' => 'Teel',
                'aimag_id' => 4],
            [   'id' => 15,
                'sum_ner' => 'Bayn-Undur',
                'aimag_id' => 4],
        ]);
    }
}

