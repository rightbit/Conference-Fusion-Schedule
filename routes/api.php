<?php

use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\ConferenceController;
use App\Http\Controllers\Api\ConferenceScheduleController;
use App\Http\Controllers\Api\ConferenceSessionController;
use App\Http\Controllers\Api\PublicScheduleController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\SessionInterestController;
use App\Http\Controllers\Api\SessionSpecialEquipmentController;
use App\Http\Controllers\Api\SessionStatusController;
use App\Http\Controllers\Api\SessionTypeController;
use App\Http\Controllers\Api\SessionUserCommentController;
use App\Http\Controllers\Api\SiteConfigController;
use App\Http\Controllers\Api\SponsorController;
use App\Http\Controllers\Api\TrackController;
use App\Http\Controllers\Api\TrackHeadController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserInfoConsignmentController;
use App\Http\Controllers\Api\UserInfoDataCategoryController;
use App\Http\Controllers\Api\UserPermissionController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\VolunteerController;
use Illuminate\Support\Facades\Route;

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


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('public-schedule', [PublicScheduleController::class, 'index']);
Route::get('public-schedule-test', [PublicScheduleController::class, 'indexTest']);


Route::middleware(['auth:sanctum'])->group( function() {


});





