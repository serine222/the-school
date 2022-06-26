<?php
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:student']
    ], function () {

    //==============================dashboard============================

    Route::get('/student/dashboard', function () {

        $ids = student::findorFail(auth()->user()->id);
        $data['count_sections'] = $ids->count();

        //        $ids = DB::table('teacher_section')->where('teacher_id',auth()->user()->id)->pluck('section_id');
        //        $count_sections =  $ids->count();
        //        $count_students = DB::table('students')->whereIn('section_id',$ids)->count();
        return view('pages.students.dashboard.dashboard', $data);
    });



    Route::group(['namespace' => 'students\dashboard'], function () {
        //==============================students============================
        Route::get('profile1', 'ProfileController@index')->name('profile1.show');
        Route::post('profile1/{id}', 'ProfileController@update')->name('profile1.update');
        Route::get('zoom', 'OnlineZoomClassesController@index')->name('zoom.show');


     });

});
