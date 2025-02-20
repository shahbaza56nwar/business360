<?php

/** *
 * @return permision number
 * authorize permission numbers return
 * **/

if (!function_exists('authrz_userManagmentModule')) {
    function authrz_userManagmentModule()
    {
        return 10;
    }
}




//Config users in user managemtn page authorize permission numbers return
if (!function_exists('authrz_umUsers')) {
    function authrz_umUsers($variable)
    {
        switch (strtolower($variable)) {
            case 'module':
                return 10;
                break;
            case 'component':
                return 10;
                break;
            case 'transaction':
                return array("module" => 10, "component" => 10);
                break;
            case 'user_home':
                return 101010;
                break;
            case 'user_create':
                return 101011;
                break;
            case 'user_update':
                return 101012;
                break;
            case 'user_delete':
                return 101013;
                break;
            default:
                break;
        }
    }
}


//Config Roles in user managemtn page authorize permission numbers return
if (!function_exists('authrz_umRoles')) {
    function authrz_umRoles($variable)
    {
        switch (strtolower($variable)) {
            case 'module':
                return 10;
                break;
            case 'component':
                return 11;
                break;
            case 'transaction':
                return array("module" => 10, "component" => 11);
                break;
            case 'role_home':
                return 101110;
                break;
            case 'role_create':
                return 101111;
                break;
            case 'role_update':
                return 101112;
                break;
            case 'role_delete':
                return 101113;
                break;
            default:
                break;
        }
    }
}
