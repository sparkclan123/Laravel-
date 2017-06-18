<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'computer',
                'unit' => 'Piece',
                'price' => 25000

            ]
        ]);
    }
}
