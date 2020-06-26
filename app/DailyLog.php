<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $table = "daily_log";

    public function pump() {
        return $this->belongsTo(Pump::class, 'id_pump');
    }
}
