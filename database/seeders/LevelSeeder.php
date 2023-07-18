<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert([
            [
                'type' => 'Easy',
            ],
            [
                'type' => 'Intermediate',
            ],
            [
                'type' => 'Hard',
            ]
        ]);
    }
}
