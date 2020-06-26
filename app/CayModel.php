<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CayModel extends Model
{
	protected $table = "cay";
    public $timestamps = false;
    protected $fillable = ['tencay', 'phutmoilan', 'delaymoilan', 'Adelay', 'Bdelay', 'hinhloaicay', 'content'];
}
