<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UiElementsController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\IconsController;


// use App\Http\Controllers\Controller;

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

// Route::get('', [Controller::class, 'index']);

// DASHBOARDS //
Route::get('/', [DashboardsController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/admin-dashboard', [\App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');

//Sign up. signin
Route::get('signup', [AuthenticationController::class, 'signupBasic'])->name('signup');
Route::post('signup', [AuthenticationController::class, 'register'])->name('signup.post');

Route::get('signin', [AuthenticationController::class, 'signinCover'])->name('login');
Route::post('/signin', [AuthenticationController::class, 'login'])->name('signin.login');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle'])->name('callback.google');

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/{user}/assign-role', [UserController::class, 'assignRole'])->name('users.assignRole');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('pages.dashboards.admin');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::get('/staff-dashboard', function () {
        return view('pages.dashboards.staff');
    })->name('staff.dashboard');
});

Route::get('profile', App\Livewire\Profile\Index::class)->name('profile')->middleware('auth');

// Platform
Route::get('/facebook', [PlatformController::class, 'facebook'])->middleware('auth')->name('facebook');
Route::get('/instagram', [PlatformController::class, 'instagram'])->middleware('auth')->name('instagram');
Route::get('/twitter', [PlatformController::class, 'twitter'])->middleware('auth')->name('twitter');
Route::get('/linkedin', [PlatformController::class, 'linkedin'])->middleware('auth')->name('linkedin');
Route::get('authFacebook', [PlatformController::class, 'authFacebook'])->middleware('auth')->name('authFacebook');
Route::get('authInstagram', [PlatformController::class, 'authInstagram'])->middleware('auth')->name('authInstagram');
Route::get('authTwitter', [PlatformController::class, 'authTwitter'])->middleware('auth')->name('authTwitter');
Route::get('authLinkedin', [PlatformController::class, 'authLinkedin'])->middleware('auth')->name('authLinkedin');

Route::resource('brand_categories', App\Http\Controllers\Brand\CategoryController::class)->middleware('auth');
Route::get('/create-brand', \App\Livewire\Brand\Create::class)->name('brand.create')->middleware('auth');
Route::get('/manage-brand', \App\Livewire\Brand\Manage::class)->name('brand.manage')->middleware('auth');
Route::get('/edit-brand/{id}', \App\Livewire\Brand\Edit::class)->name('brand.edit')->middleware('auth');

// Brand
Route::get('/social-accounts', [\App\Models\SocialAccount::class, 'showSocialAccounts'])->name('social.accounts');

Route::get('/facebook/login', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');
Route::post('/facebook/post', [FacebookController::class, 'postToFacebook'])->name('facebook.post');

Route::get('/calender-social', \App\Livewire\Social\Index::class)->name('calender.social');
Route::get('/posts-social', \App\Livewire\Social\Post::class)->name('posts.social');

Route::get('/create-event', \App\Livewire\Social\Create::class)->name('create.event');
Route::get('/edit-social', \App\Livewire\Social\Edit::class)->name('edit.social');

//Heylix
Route::get('/create-heylix', \App\Livewire\Heylix\Create::class)->name('create.heylix');
Route::get('/social-temp', \App\Livewire\Heylix\Template\Social::class)->name('social.temp');

Route::get('/create-social', \App\Livewire\Heylix\Form\Social::class)->name('create.social');
//Route::get('/create-carousel', \App\Livewire\Heylix\Form\Carousel::class)->name('create.carousel');
Route::get('/create-carousal', \App\Livewire\Heylix\Form\Carousal::class)->name('create.carousal');
Route::get('/jobstatus-heylix', \App\Livewire\Heylix\Jobstatus::class)->name('jobstatus.heylix');
Route::get('/brand-heylix', \App\Livewire\Heylix\Brand::class)->name('brand.heylix');
Route::get('/virtual-heylix', \App\Livewire\Heylix\Virtual::class)->name('virtual.heylix');

//Credits
Route::get('/aicredits', \App\Livewire\Credits\Aicredits::class)->name('aicredits');
Route::get('/adcredits', \App\Livewire\Credits\Adcredits::class)->name('adcredits');

//advertising
Route::get('/meta-ads', \App\Livewire\Advertising\Meta::class)->name('meta.ads');
Route::get('/google-ads', \App\Livewire\Advertising\Google::class)->name('google.ads');
Route::get('/active-ads', \App\Livewire\Advertising\Active::class)->name('active.ads');

//Credits
Route::get('/meta-upsert', \App\Livewire\Advertising\Upsert\Lead::class)->name('meta.upsert');
Route::get('/google-upsert', \App\Livewire\Advertising\Upsert\Call::class)->name('google.upsert');

Route::get('/call', \App\Livewire\Advertising\Upsert\Call::class)->name('call');
Route::get('/leads', \App\Livewire\Advertising\Upsert\Lead::class)->name('leads');
Route::get('/awarness', \App\Livewire\Advertising\Upsert\Awarness::class)->name('awarness');
Route::get('/drive', \App\Livewire\Advertising\Upsert\Drive::class)->name('drive');
Route::get('/messages', \App\Livewire\Advertising\Upsert\Messages::class)->name('messages');
Route::get('/post', \App\Livewire\Advertising\Upsert\Post::class)->name('post');
Route::get('/app', \App\Livewire\Advertising\Upsert\App::class)->name('app');
Route::get('/whatsapp', \App\Livewire\Advertising\Upsert\Whatsapp::class)->name('whatsapp');

//advertising
Route::get('/upgrade-index', \App\Livewire\Upgrade\Index::class)->name('upgrade-index');
Route::get('/website-search', \App\Livewire\Advertising\Google\Website\Search::class)->name('website-search');
Route::get('/website-display', \App\Livewire\Advertising\Google\Website\Display::class)->name('website-display');

Route::get('/lead-search', \App\Livewire\Advertising\Google\Lead\Search::class)->name('lead-search');
Route::get('/lead-display', \App\Livewire\Advertising\Google\Lead\Display::class)->name('lead-display');

//Filemanager
Route::get('/filemanager-index', \App\Livewire\Filemanager\Index::class)->name('filemanager.index');
Route::get('/filemanager-generate', \App\Livewire\Filemanager\Generate::class)->name('filemanager.generate');
Route::get('/filemanager-upload', \App\Livewire\Filemanager\Upload::class)->name('filemanager.upload');
Route::get('/filemanager-heylix', \App\Livewire\Filemanager\Heylix::class)->name('filemanager.heylix');
Route::get('/filemanager-gallery', \App\Livewire\Filemanager\Gallery::class)->name('filemanager.gallery');

Route::get('/ai-tools', [DashboardsController::class, 'aiTools']);
Route::get('/advertising', [DashboardsController::class, 'advertising']);
Route::get('/seo', [DashboardsController::class, 'seo']);
Route::get('/assets', [DashboardsController::class, 'assets']);

Route::get('/website', [DashboardsController::class, 'website']);
Route::get('/analytics', [DashboardsController::class, 'analytics']);
Route::get('/credits', [DashboardsController::class, 'credits']);
Route::get('/heylix', [DashboardsController::class, 'heylix']);
Route::get('/upgrade', [DashboardsController::class, 'upgrade']);
Route::get('/support', [DashboardsController::class, 'support']);
Route::get('alerts', [UiElementsController::class, 'alerts']);

Route::get('/web-website', App\Livewire\Web\Website::class)->name('web-website');
Route::get('/web-app', App\Livewire\Web\App::class)->name('web-app');


