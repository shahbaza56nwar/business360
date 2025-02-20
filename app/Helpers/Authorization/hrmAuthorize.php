<?php

/** *
 * @return permision number
 * authorize permission numbers return
 * **/

if (!function_exists('authrz_hrmModule')) {
    function authrz_hrmModule()
    {
        return 11;
    }
}


//Config hrm recruit page authorize permission numbers return
if (!function_exists('authrz_hrmRecruit')) {
    function authrz_hrmRecruit($variable)
    {
        switch (strtolower($variable)) {
            case 'module':
                return 11;
                break;
            case 'component':
                return 10;
                break;
            case 'transaction':
                return array("module" => 11, "component" => 10);
                break;
            case 'recruit_home':
                return 111010;
                break;
            case 'job_opening_home':
                return 111011;
                break;
            case 'job_create':
                return 111012;
                break;
            case 'job_update':
                return 111013;
                break;
            case 'job_delete':
                return 111014;
                break;
            default:
                break;
        }
    }
}
