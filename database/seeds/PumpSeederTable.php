<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PumpSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pump')->insert([
            ['name' => 'Máy bơm 1','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Máy bơm 2','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Máy bơm 3','created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
    }
}
