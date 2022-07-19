<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\CmessageController;
use App\Http\Controllers\FrontendController;
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


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/team-member', [FrontendController::class, 'team'])->name('team_member');
Route::get('/gallery-all', [FrontendController::class, 'gallery'])->name('gallery_all');
Route::get('/gallery-all/{id}', [FrontendController::class, 'gallery_details'])->name('gallery_details');
Route::get('/contact-all', [FrontendController::class, 'contact'])->name('contact_us');
Route::get('/terms-condition', [FrontendController::class, 'terms'])->name('terms.condition');
Auth::routes();
Route::resource('cmessage', CmessageController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resources([
        'logo' => LogoController::class,
        'slider' => SliderController::class,
        'about' => AboutController::class,
        'team' => TeamController::class,
        'message' => MessageController::class,
        'contact' => ContactController::class,
        'credential' => CredentialController::class,
        'term' => TermController::class,
        'rule' => RuleController::class,
        'gallery' => GalleryController::class,
        'partner' => PartnerController::class,
        'mission' => MissionController::class,
        'vision' => VisionController::class,
    
    ]);
});