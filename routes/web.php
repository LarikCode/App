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
    return view('welcome');
});

Route::get('/hello', function (){
    return view('hello');
});

Route::get('/tasks', function (){
    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('tasks', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id){
    //$tasks = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    //dd($tasks);
    return view('task', compact('task'));
});
