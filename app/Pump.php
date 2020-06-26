<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pump extends Model
{
    protected $table = "pump";

    public function log() {
        return $this->hasMany(DailyLog::class, 'id_pump');
    }
}
