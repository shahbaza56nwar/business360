<?php

namespace App\Http\Traits;

use DateTime;
use DateInterval;
use Exception;
use App\Models\User;
use App\Models\CnfgSettingComponent;
use App\Models\CnfgUserActivity;


trait CommonData
{
    public $date; //Current Date > yyyy-mm-dd
    public $datetime; //Current Date+Tiem > yyyy-mm-dd hh:mm:ss
    public $datetimesp; //Current Date+Time > yyyy-mm-dd hh:mm PP
    public $curyearf; //Current Year > yyyy
    public $curyearn; //Current Year > yy
    public $sbuid; //SBU ID
    public $locid; //locationID
    public $sblid; //SBU Location ID
    public $shortdateformat; // short date format
    public $longdateformat; // Long date format
    public $timeformat; //Time format
    public $backdate; //Maximum backlog period Days
    public $weekstart; // week start from
    public $user; // week start from

    public function __construct()
    {
        //generate Date
        $date = new DateTime();
        $this->date = $date->format('Y-m-d');
        $this->datetime = $date->format('Y-m-d H:i:s');
        $this->datetimesp = $date->format('Y-m-d h:i A');
        $this->curyearf = $date->format('Y');
        $this->curyearn = $date->format('y');
    }


    //Check use has permission from table
    public function userCan($pmid)
    {
        return User::canDo($pmid);
    }

    // create user activity log creation function
    public function userActivityLog($permission){
        try{

            $activity = new CnfgUserActivity();
            $activity->user_id = auth()->user()->id;
            $activity->permission_id = $permission;
            $activity->module_id = substr($permission, 0, 2);
            $activity->component_id = substr($permission, 2, 2);
            $activity->activity_log_at = $this->datetime;
            $activity->save();

        }catch(Exception $e){
            dd($e);
        }
    }
}
