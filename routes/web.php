<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
use App\Models\Announcement;
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

//Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');

Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create')->middleware('auth');

Route::get('annunci/{announcement}/show', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');

Route::get('categorie/{category}', [CategoryController::class, 'showCategory'])->name('categories.show');
Route::get('annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');
Route::get('/profile', [PageController::class, 'profile'])->name('page.profile');


Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accetta/annuncio{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');