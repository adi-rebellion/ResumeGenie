<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('auth:api')->get('/me', function () {
//     $user = auth()->user();
//     return $user;
// });

Route::get('/status', function () {
    $user = User::where('id', 1)->first();
    $token = auth('api')->login($user);
    dd($token);

    // return 'hello';
});


Route::post('auth/register', 'Auth\RegisterController@register');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/user', 'Auth\LoginController@getUser');
Route::get('verification/email/{verification}', 'Auth\LoginController@emailVerification')->name('emailVerification');
Route::post('auth/logout', 'Auth\LoginController@logout');
Route::post('auth/user', 'Auth\LoginController@getUserPost');
Route::get('auth/get/user', 'Auth\LoginController@getUser');
Route::get('auth/add/cookie', 'Auth\LoginController@addCookie');






Route::post('insert/genie/basic','ResumeController@resume_genie_basic');
Route::get('get/genie/basic','ResumeController@genie_get_basic');


Route::post('insert/genie/work','ResumeController@add_resume_work_exp');
Route::post('update/genie/work','ResumeController@update_resume_work_exp');
Route::post('toggle/genie/work','ResumeController@toggle_resume_work_exp');
Route::get('get/all/genie/work','ResumeController@genie_all_work_exp');

Route::post('insert/genie/education','ResumeController@add_resume_genie_education');
Route::post('update/genie/education','ResumeController@update_resume_genie_education');
Route::post('toggle/genie/education','ResumeController@toggle_resume_education');
Route::get('get/all/genie/education','ResumeController@genie_all_education');

Route::post('insert/genie/award','ResumeController@add_resume_genie_award');
Route::post('update/genie/award','ResumeController@update_resume_genie_award');
Route::post('toggle/genie/award','ResumeController@toggle_resume_award');
Route::get('get/all/genie/award','ResumeController@genie_all_award');

Route::post('insert/genie/project','ResumeController@add_resume_genie_project');
Route::post('update/genie/project','ResumeController@update_resume_genie_project');
Route::post('toggle/genie/project','ResumeController@toggle_resume_project');
Route::get('get/all/genie/project','ResumeController@genie_all_project');

Route::post('insert/genie/skill','ResumeController@add_resume_genie_skill');
Route::post('update/genie/skill','ResumeController@update_resume_genie_skill');
Route::post('toggle/genie/skill','ResumeController@toggle_resume_skill');
Route::get('get/all/genie/skill','ResumeController@genie_all_skill');


Route::post('insert/genie/contact','ResumeController@add_resume_genie_contact');
Route::post('update/genie/contact','ResumeController@update_resume_genie_contact');
Route::get('get/all/genie/contact','ResumeController@genie_all_contact');

Route::get('get/all/genie/active','ResumeController@get_all_active_areas');
Route::post('get/all/genie/skill','ResumeController@fetch_genie_skills');
Route::get('get/all/genie/connect','ResumeController@fetch_genie_connect');
Route::get('get/all/genie/spoken','ResumeController@fetch_genie_spoken');

Route::post('insert/genie/social','ResumeController@add_resume_genie_social');
Route::post('toggle/genie/social','ResumeController@toggle_resume_social');
Route::post('update/genie/social','ResumeController@update_resume_genie_social');
Route::get('get/all/genie/social','ResumeController@genie_all_social');

Route::post('insert/genie/language','ResumeController@add_resume_genie_language');
Route::post('update/genie/language','ResumeController@update_resume_genie_language');
 Route::post('toggle/genie/language','ResumeController@toggle_resume_language');
Route::get('get/all/genie/language','ResumeController@genie_all_language');


Route::post('insert/genie/resume','ResumeController@add_genie_resume');
Route::post('update/genie/resume','ResumeController@update_genie_resume');
Route::get('get/all/genie/resume','ResumeController@get_all_genie_resume');

Route::post('insert/genie/reference','ResumeController@add_resume_reference');
Route::post('update/genie/reference','ResumeController@update_resume_reference');
Route::post('toggle/genie/reference','ResumeController@toggle_resume_reference');
Route::get('get/all/genie/reference','ResumeController@genie_all_reference');

Route::post('insert/genie/volunteer','ResumeController@add_resume_volunteer');
Route::post('update/genie/volunteer','ResumeController@update_resume_volunteer');
Route::post('toggle/genie/volunteer','ResumeController@toggle_resume_volunteer');
Route::get('get/all/genie/volunteer','ResumeController@genie_all_volunteer');


Route::post('insert/genie/interest','ResumeController@add_resume_interest');
Route::post('update/genie/interest','ResumeController@update_resume_interest');
Route::post('toggle/genie/interest','ResumeController@toggle_resume_interest');
Route::get('get/all/genie/interest','ResumeController@genie_all_interest');



Route::post('toggle/genie/component','ResumeController@genie_toggle_component');




Route::get('/make/user/1/json', 'ResumeController@add_user_json');
Route::get('/user/preview/json', 'ResumeController@preview_json');
