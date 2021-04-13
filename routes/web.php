<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
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
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-data/{id}', [UserController::class, 'fetchdata']);

Route::get('/project', function(){
   return view('project');
});
Route::get('/project', [SiteController::class, 'project'])->name('project');
Route::get('/service', [SiteController::class, 'service'])->name('service');
Route::get('/projects', [SiteController::class, 'projects_company'])->name('projects_company');
Route::get('/company', [SiteController::class, 'company'])->name('company');
Route::get('/contacts', [SiteController::class, 'contact'])->name('contact');

Route::post('/contact', [ClientsController::class, 'store'])->name('store');
