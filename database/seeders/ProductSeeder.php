<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $index) {
            $price = rand(20, 999);
            DB::table('products')->insert([
                'price' => $price,
                'name' =>  'محصول'. $index,
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ]);
        }
    }
}
