<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CarmodelController;
use Illuminate\Support\Facades\Auth;
use App\Models\Carmodel;

Route::get('/', function () {
    return view('welcome');
});

/*require __DIR__.'/auth.php';*/

/*Route::group(['middleware' => ['auth']], function () {
    Route::resource('photos', PhotoController::class, ['only' => ['index', 'store', 'destroy']]);
});*/

/*Auth::routes();*/

// Auth::routes();はLaravelが提供している便利な機能で
// 一般的な認証に関するルーティングを自動的に定義してくれます
// この一行を書くだけで、ログインやログアウト
// パスワードのリセット、新規ユーザー登録などのための
// ルートが作成されます。
//　つまりログイン画面に用意されたビューのリンク先がこの1行で済みます*/

Route::get('/create', 'App\Http\Controllers\CarmodelController@create');
Route::post('/index', 'App\Http\Controllers\CarmodelController@store');

/*Route::group(['middleware' => 'auth'], function () {
    Route::resource('./resources/views',CarmodelController::class);
});*/
/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
