<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('brands')->insert(['name' => 'SCHOENEN','description'=>'Beschrijving SCHOENEN']);
        DB::table('brands')->insert(['name' => 'HEMDEN','description'=>'Beschrijving HEMDEN']);
        DB::table('brands')->insert(['name' => 'SOKKEN','description'=>'Beschrijving SOKKEN']);
    }
}
