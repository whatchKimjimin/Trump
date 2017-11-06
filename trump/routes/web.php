<?php

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


// 메인
Route::get('/','TrumpController@index')->name('TrumpIndex');

// 트럼프 트위터 언급뷰
Route::get('/usTweets','TrumpController@usTweet')->name('UsTw');
// 갤러리
Route::get('/gallary','TrumpController@gallary')->name('gallary');
// 감정 그래프
Route::get('/feelGraph','TrumpController@feelGraph')->name('feelGraph');
// 그래프 api
Route::post('/getGraphData','TrumpController@getGraphData')->name('getGraphData');
// 키워드
Route::get('/keyWord','TrumpController@keyWord')->name('keyWord');

Route::get('/test','TrumpController@test')->name('Test');