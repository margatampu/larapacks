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

Route::get('/', function () {
    // $message = 'message here';
    // Log::emergency($message);
    // Log::alert($message);
    // Log::critical($message);
    // Log::error($message);
    // Log::warning($message);
    // Log::notice($message);
    // Log::info($message);
    // Log::debug($message);

    // Log::channel('teams')->error('Error message here: ' . date('H:i:s'));

    try {
        $a = 3 / 0;
    } catch (\Exception $e) {
        Log::error($e);
    }

    // return view('welcome');
});
