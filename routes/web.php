<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

// ========================== admin route ====================
// use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\LeaderboardController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// --------------------------------- frontend route ---------------------------------------

// ======================= Leaderboard route list =========================
Route::get('/leaderboard/a',[LeaderboardController::class,'FrontendViewTeamA']);
Route::get('/leaderboard/b',[LeaderboardController::class,'FrontendViewTeamB']);

Route::get('/', [FrontendController::class, 'Index']);






// ------------------------ admin route ==============================


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin',function(){
    return redirect('/dashboard');
});


Route::get('/dashboard',function(){
    return redirect('/admin/dashboard');
});

Route::middleware('auth')->group(function () {
    
    
    // =========================== team upload==========================

    Route::get('/admin/teams',[TeamController::class,'index'])->name('admin.teams');
    Route::post('/admin/team/add',[TeamController::class,'store'])->name('admin.team.add');
    Route::get('/admin/team/delete/{id}',[TeamController::class,'delete']);
    Route::get('/admin/team/edit/{id}',[TeamController::class,'edit']);
    Route::post('/admin/team/update/{id}',[TeamController::class,'update']);


    // ======================= Leaderboard route list =========================
    Route::get('/admin/team/leaderboard/a',[LeaderboardController::class,'ViewTeamA'])->name('admin.team.leader.a');
    Route::get('/admin/team/leaderboard/b',[LeaderboardController::class,'ViewTeamB'])->name('admin.team.leader.b');
    Route::get('/admin/teams/leaderboard/edit/{id}',[LeaderboardController::class,'edit']);
    Route::post('/admin/teams/leaderboard/update/{id}',[LeaderboardController::class,'update']);
    



});



require __DIR__.'/auth.php';
