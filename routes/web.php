<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('users','UserController');

Route::resource('jobs','JobController');

Route::resource('statuses','StatusController');

Route::resource('students','StudentController');

Route::resource('learningmethods','LearningmethodController');

Route::resource('organizations','OrganizationController');

Route::resource('studentparents','StudentparentController');

Route::resource('professors','ProfessorController');

Route::resource('progresses','ProgressController');

Route::resource('roles','RoleController');

Route::resource('scores','ScoreController');

Route::resource('subjects','SubjectController');

Route::resource('tasks','TaskController');

