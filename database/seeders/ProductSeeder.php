<?php

namespace Database\Seeders;

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
        for ($i = 1; $i <11; $i++){
            DB::table('products')->insert(
                [
                    'id' => $i,
                    'idBrand' => $i,
                    'slug' => "Name-{$i}",
                    'name' => "Name {$i}",
                    'price' => $i * 1000000,
                    'qty' => $i + 10,
                    'note' => "Nothing {$i}" ,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => null
                ]
            );
        }
    }
}
