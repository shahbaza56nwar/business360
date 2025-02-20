<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hrm\Recruit\RecruitController;
use App\Http\Controllers\Hrm\Recruit\JobOpeningController;

/*start recruit section*/
//page route
Route::get('Recruit', [RecruitController::class, 'indexHome'])->name('hrm_recruit_home')->middleware('hasPermission:' . authrz_hrmRecruit('recruit_home'), 'userActivity:' . authrz_hrmRecruit('recruit_home'));
//data route
//validation route
/*end recruit section*/


/*start job opening section*/
//page route
Route::get('JobOpenings', [JobOpeningController::class, 'indexHome'])->name('job_openings_home')->middleware('hasPermission:' . authrz_hrmRecruit('job_opening_home'), 'userActivity:' . authrz_hrmRecruit('job_opening_home'));
//data route
//validation route
/*end job opening section*/

