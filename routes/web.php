<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

//Route::get($announcement_create, [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');

// Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create')->middleware('auth');
Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create')->middleware('auth');

Route::get('annunci/{announcement}/show', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');

Route::get('categorie/{category}', [CategoryController::class, 'showCategory'])->name('categories.show');
Route::get('annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');
Route::get('/profilo', [PageController::class, 'profile'])->name('page.profile')->middleware('auth');;


Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//*Rendi un utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


Route::get('/ricerca/annuncio', [PageController::class,'searchAnnouncements'])->name('announcement.search');

Route::get('profilo/annunci', [AnnouncementController::class, 'showAnnouncementProfile'])->name('profiles.show');

Route::post('lingua/{lang}',[PageController::class, 'setLanguage' ])->name('setLocale');