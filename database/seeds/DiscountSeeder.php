<?php

use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name' => 'DISCOUNT A','description'=>'Beschrijving DISCOUNT A']);
        DB::table('brands')->insert(['name' => 'DISCOUNT B','description'=>'Beschrijving DISCOUNT B']);
        DB::table('brands')->insert(['name' => 'DISCOUNT C','description'=>'Beschrijving DISCOUNT C']);
    }
}
