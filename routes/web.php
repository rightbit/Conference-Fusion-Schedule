<?php

use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\ExportController;
use App\Models\SiteConfig;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/terms-and-policies', function() {
        return (view()->exists('custom.terms')) ? view('custom.terms') : view('terms');
})->name('terms');

Auth::routes();

//Logged in group
Route::middleware(['auth'])->group( function() {


});


//Admin Group
Route::group(['prefix' => 'admin', 'middleware' => ['auth','can:view_admin']], function () {




    // Clear application cache:
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return 'Cache has been cleared';
    });
    //Clear route cache:
    Route::get('/route-cache', function() {
        Artisan::call('route:cache');
        return 'Routes cache has been cleared';
    });

    //Clear config cache:
    Route::get('/config-cache', function() {
        Artisan::call('config:cache');
        return 'Config cache has been cleared';
    });

    // Clear view cache:
    Route::get('/view-clear', function() {
        Artisan::call('view:clear');
        return 'View cache has been cleared';
    });
});
