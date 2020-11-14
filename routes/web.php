<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function (){
    $data=App\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask','TaskController@store');


Route::get('/markascompleted/{id}','TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');


Route::get('/updatetask/{id}','TaskController@updatetaskview');

Route::post('/updatetasks','TaskController@updatetask');


Route::get('delete','TaskController@destroy');


