<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoydaliResursController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolMembersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\UsefulResourcesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/connect', [FrontController::class, 'connect'])->name('connect');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/teachers', [FrontController::class, 'teachers'])->name('teachers');
Route::get('/rekvizit', [FrontController::class, 'rekvizit'])->name('rekvizit');
Route::get('/education', [FrontController::class, 'education'])->name('education');
Route::get('/schoolnews', [FrontController::class, 'schoolNews'])->name('schoolNews');
Route::get('/leadership', [FrontController::class, 'leadership'])->name('leadership');
Route::get('/infographic', [FrontController::class, 'infographic'])->name('infographic');
Route::get('/schoolrules', [FrontController::class, 'schoolRules'])->name('schoolRules');
Route::get('/schooltasks', [FrontController::class, 'schoolTasks'])->name('schoolTasks');
Route::get('/searchresult', [FrontController::class, 'searchResult'])->name('searchresult');
Route::get('/statesymbols', [FrontController::class, 'stateSymbols'])->name('stateSymbols');
Route::get('/usefulresources', [UsefulResourcesController::class, 'index'])->name('usefulresources');
Route::get('/educationdetails', [FrontController::class, 'educationDetails'])->name('educationDetails');
Route::get('/usefulresources/details/{id}', [UsefulResourcesController::class, 'details'])->name('usefulresourcesDetails');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/foydali-resurslar', [FoydaliResursController::class, 'index']);



Route::prefix('admin', )->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('schoolmembers', SchoolMembersController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('timetable', TimetableController::class);
    Route::resource('professions', ProfessionController::class);
    Route::resource('gallery', GalleryController::class);
    Route::get('timetable/download/{id}', [TimetableController::class, 'download'])->name('timetable.download');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
