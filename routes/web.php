<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Message;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\Portofolio;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\ProfesiController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\HomeController as ControllersHomeController;
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

// 
Route::get('/', [ControllersHomeController::class,'index']);
Route::get('/portfolio-details/{id}', [ControllersHomeController::class,'detail']);

Route::get('/admin', [HomeController::class, 'index'] )->middleware(['auth']);
Route::get('/admin/home', [HomeController::class, 'home'] )->middleware(['auth']);
Route::get('/admin/home/edit', [HomeController::class, 'edit'] )->middleware(['auth']);


Route::get('/admin/add-profesi', [ProfesiController::class, 'create'] )->middleware(['auth']);
Route::post('/admin/add-profesi', [ProfesiController::class, 'store'] )->middleware(['auth']);
Route::delete('/admin/home/{id}/delete', [ProfesiController::class, 'destroy'] )->middleware(['auth']);


Route::get('/admin/extra', [ProfesiController::class, 'create'] )->middleware(['auth']);


Route::get('/admin/add-sosial-media', [SosmedController::class, 'create'] )->middleware(['auth']);
Route::post('/admin/add-sosial-media', [SosmedController::class, 'store'] )->middleware(['auth']);
Route::delete('/admin/sosmed/{id}/delete', [SosmedController::class, 'destroy'] )->middleware(['auth']);

Route::get('/admin/about', [AboutController::class, 'index'] )->middleware(['auth']);
Route::get('/admin/about/edit', [AboutController::class, 'edit'] )->middleware(['auth']);
Route::put('/admin/about/edit', [AboutController::class, 'update'] )->middleware(['auth']);


Route::get('/admin/resume', [ResumeController::class, 'index'] )->middleware(['auth']);
Route::get('/admin/resume/edit', [ResumeController::class, 'edit'] )->middleware(['auth']);
Route::put('/admin/resume/edit', [ResumeController::class, 'updateresume'] )->middleware(['auth']);
Route::get('/admin/education/create', [ResumeController::class, 'createeducation'] )->middleware(['auth']);
Route::post('/admin/education/create', [ResumeController::class, 'storeeducation'] )->middleware(['auth']);
Route::get('/admin/education/{id}', [ResumeController::class, 'showeducation'] )->middleware(['auth']);
Route::get('/admin/education/{id}/edit',[ResumeController::class, 'editeducation'])->middleware(['auth']);
Route::put('/admin/education/{id}/edit',[ResumeController::class, 'update'])->middleware(['auth']);
Route::delete('/admin/education/{id}/delete',[ResumeController::class, 'destroyducation'])->middleware(['auth']);
Route::get('/admin/create/experience', [ResumeController::class, 'createexperience'])->middleware(['auth']);
Route::post('/admin/create/experience', [ResumeController::class, 'storeexperience'])->middleware(['auth']);
Route::get('/admin/experience/{id}', [ResumeController::class, 'showexperience'])->middleware(['auth']);
Route::delete('/admin/experience/{id}/delete', [ResumeController::class, 'destroyexperience'])->middleware(['auth']);
Route::get('/admin/experience/{id}/edit', [ResumeController::class, 'editexperience'])->middleware(['auth']);
Route::put('/admin/experience/{id}/edit', [ResumeController::class, 'updateexperience'])->middleware(['auth']);

Route::get('/admin/portofolio', [PortofolioController::class, 'index'] )->middleware(['auth']);
Route::get('/admin/portofolio/edit', [PortofolioController::class, 'edit'] )->middleware(['auth']);
Route::put('/admin/portofolio/edit', [PortofolioController::class, 'update'] )->middleware(['auth']);

Route::get('/admin/project/add', [PortofolioController::class, 'createportofolio'])->middleware(['auth']);
Route::post('/admin/project/add', [PortofolioController::class, 'store'])->middleware(['auth']);
Route::delete('/admin/portofolio/{id}/delete', [PortofolioController::class, 'destroy'])->middleware(['auth']);
Route::get('/admin/project/{id}/edit', [PortofolioController::class, 'editprojects'])->middleware(['auth']);
Route::put('/admin/project/{id}/edit', [PortofolioController::class, 'updateprojects'])->middleware(['auth']);

Route::get('/admin/user/edit', [UserController::class, 'edit'] )->middleware(['auth']);
Route::get('/admin/message', [MessageController::class, 'index'] )->middleware(['auth']);
Route::delete('/admin/message/{id}', [MessageController::class, 'destroy'] )->middleware(['auth']);

Route::post('/forms/message', [ContactController::class ,'store'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
