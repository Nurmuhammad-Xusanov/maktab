<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
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
Route::get('/statesymbols', [FrontController::class, 'stateSymbols'])->name('stateSymbols');
Route::get('/usefulresources', [FrontController::class, 'usefulresources'])->name('usefulresources');
Route::get('/educationdetails', [FrontController::class, 'educationDetails'])->name('educationDetails');
Route::get('/leadershipdetails', [FrontController::class, 'leadershipDetails'])->name('leadershipDetails');
Route::get('/usefulresourcesdetails', [FrontController::class, 'usefulresourcesDetails'])->name('usefulresourcesDetails');




Route::prefix('admin', )->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('staff', StaffController::class);
    Route::resource('professions', ProfessionController::class);
    Route::resource('categories', CategoryController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
