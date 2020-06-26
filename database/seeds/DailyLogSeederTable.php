<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DailyLogSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 20; $i++) { 
            DB::table('daily_log')->insert([
                ['id_pump' => rand(0, 3),'created_at' => Carbon::now(),'updated_at' => Carbon::now()]
            ]);
        }
    }
}
