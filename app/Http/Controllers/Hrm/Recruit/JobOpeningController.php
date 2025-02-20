<?php

namespace App\Http\Controllers\Hrm\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Recruit\jobOpeningService;


class JobOpeningController extends Controller
{
    //render job opening home
    public function indexHome(Request $request)
    {
        addJavascriptFile('assets/js/blade/hrm/recruit/jobopening/job_opening_common.js');
        return view('pages.hrm.recruit.jobopening.job_opening_home')->with([]);
    }
}
