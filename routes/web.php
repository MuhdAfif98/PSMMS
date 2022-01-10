<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\ProfileController;
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

//Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirects',[HomeController::class,"index"]);

Route::GET('Supervisor.edit/{id}', [SupervisorController::class,'edit']);

Route::group(['middleware' => ['web']], function () {
    Route::resource('/supervisor','SupervisorController');

    Route::get('oi',[SupervisorController::class,'show']);

    Route::get('projectTitleList','SupervisorController@title');
});

Route::get('studentDashboard', function () {
    return view('studentDashboard');
});


//Manage Profile

//Route::get('/studentProfile','ProfileController@viewStudent'); - version lama x jadi -_-

Route::get('studentProfile',[ProfileController::class, 'viewStudent']);

Route::get('test',[ProfileController::class, 'index']);

/*
Route::get('/studentProfile', function () {
    return view('ManageProfile.studentProfile');
}); */

