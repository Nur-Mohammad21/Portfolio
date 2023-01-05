<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
//backend start
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
// Profile
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index')->middleware(['auth']);
Route::post('/profile-create',[ProfileController::class,'create'])->name('profile.create')->middleware(['auth']);
// About
Route::get('/about',[AboutController::class,'index'])->name('about.index')->middleware(['auth']);
Route::post('/about-create',[AboutController::class,'create'])->name('about.create')->middleware(['auth']);
// Qualification
Route::get('/education',[QualificationController::class,'index'])->name('education.index')->middleware(['auth']);
Route::post('/education-create',[QualificationController::class,'create'])->name('education.create')->middleware(['auth']);

Route::get('/experience',[ExperienceController::class,'index'])->name('experience.index')->middleware(['auth']);
Route::post('/experience-create',[ExperienceController::class,'create'])->name('experience.create')->middleware(['auth']);
//Skill controller
Route::get('/skill',[SkillController::class,'index'])->name('skill.index')->middleware(['auth']);
Route::post('/skill-create',[SkillController::class,'create'])->name('skill.create')->middleware(['auth']);
//Service controller
Route::get('/service',[ServiceController::class,'index'])->name('service.index')->middleware(['auth']);
Route::post('/service-create',[ServiceController::class,'create'])->name('service.create')->middleware(['auth']);

Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio.index')->middleware(['auth']);
Route::post('/portfolio-create',[PortfolioController::class,'create'])->name('portfolio.create')->middleware(['auth']);
Route::get('/portfolio-get-all',[PortfolioController::class,'getAllPortfolio'])->name('portfolio.all')->middleware(['auth']);
Route::get('/portfolio-upload-image/{id}',[PortfolioController::class,'uploadImage'])->name('upload.image')->middleware(['auth']);
Route::post('/portfolio-upload-image-save',[PortfolioController::class,'uploadImageSave'])->name('upload.save')->middleware(['auth']);
require __DIR__.'/auth.php';
