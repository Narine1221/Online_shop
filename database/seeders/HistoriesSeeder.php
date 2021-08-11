<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert([
            'product_id' => 1,
            'user_id' => 1,
            'count' => mt_rand(10,30),
            'price' => mt_rand(100,300),
        ]);
    }
}
