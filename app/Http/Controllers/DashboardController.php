<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pump;
use App\DailyLog;

class DashboardController extends Controller
{
    public function index() {
        $logs = DailyLog::all();

        $pump1 = [];
        $pump2 = [];
        $pump3 = [];

        for ($i=0; $i < $logs->count(); $i++) { 
            if($logs[$i]->id_pump == 1) {
                array_push($pump1, $logs[$i]);
            }

            if($logs[$i]->id_pump == 2) {
                array_push($pump2, $logs[$i]);
            }

            if($logs[$i]->id_pump == 3) {
                array_push($pump3, $logs[$i]);
            }
        }

        return view('admin.index', compact('pump1', 'pump2', 'pump3'));
    }
}
