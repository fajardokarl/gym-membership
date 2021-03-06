<?php

use App\Http\Controllers\Api\{
    MembersController,
    ProgramsController,
    TrainersController
};
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// members
Route::get('search/members', [MembersController::class, 'search']);
Route::apiResource('members', MembersController::class);

// programs
Route::apiResource('programs', ProgramsController::class);
Route::get('programs/{program}/members/{active?}', [ProgramsController::class, 'members'])->name('programs.members');

// trainer
Route::apiResource('trainers', TrainersController::class);