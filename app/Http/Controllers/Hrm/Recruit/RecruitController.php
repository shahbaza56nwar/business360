<?php

namespace App\Http\Controllers\Hrm\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruitController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 1.Route to Users Home page
    |--------------------------------------------------------------------------
    | .....
    */
    public function indexHome(Request $request)
    {
        return view('pages.hrm.recruit.recruit_home')->with([]);
    }
}
