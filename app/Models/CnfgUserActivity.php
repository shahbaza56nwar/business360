<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CnfgUserActivity extends Model
{
    use HasFactory;
    protected $table = 'cnfg_useractivities';
    protected $primaryKey = 'activity_id';
    public $timestamps = false;
}
