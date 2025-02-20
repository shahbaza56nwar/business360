<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CnfgSettingComponent extends Model
{
    use HasFactory;
    protected $table = 'cnfg_setting_components';
    protected $primaryKey = 'sci';
    public $timestamps = false;
}
