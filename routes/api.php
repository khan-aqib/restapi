<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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


/*
 * 
 *  Grouping Using Api Resource Routes
 *   Api/V1 is controlled under Route Source Provider  
 *
 *
 */

Route::apiResource('articles',\App\Http\Controllers\ArticleController::class)->only(['index','show','store','update','destroy']);


