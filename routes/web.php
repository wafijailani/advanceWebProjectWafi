<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get("/addproj",[homeControl::class,"addProject"]);

Route::get('/addproj', [homeControl::class, 'getStaff']);

Route::get('/viewall', [homeControl::class, 'viewallProjects']);

Route::get('/viewstaffproj',[homeControl::class,'viewProjectSV']);

Route::get('/viewstaffexaminer',[homeControl::class,'ViewProjectExaminer']);

Route::get('/staffedit',[homeControl::class,'editProject']);

Route::get('staffedit/{id}', [homeControl::class, 'editProject2']);

Route::put('update/{id}', [homeControl::class, 'update']);

Route::post('/addproj', [homeControl::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
