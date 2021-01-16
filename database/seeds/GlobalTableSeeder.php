<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('state')->truncate();
        DB::table('district')->truncate();
        DB::table('product')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(StateTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
