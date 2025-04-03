<?php

use Illuminate\Http\Request;

Route::get("tasks", "TasksController@index");
Route::get("tasks/{task}", "TasksController@show");
Route::post("tasks", "TasksController@store");
Route::patch("tasks/{task}", "TasksController@update");
Route::delete("tasks/{task}", "TasksController@destroy");

//use Illuminate\Support\Facades\Route;
// Route::get("tasks", function(){
//     $tasks = [
//         [
//             "id"=>1,
//             "name"=>"Estudar PHP 7",
//             "complete"=> false
//         ],
//         [
//             "id"=>2,
//             "name"=>"Estudar JavaScript",
//             "complete"=> true
//         ]
//     ];
//     return $tasks;
// });
// Route::get('/teste-api', function () {
//     return response()->json(['mensagem' => 'API funcionando!']);
// });
