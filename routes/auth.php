<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SettingsController;


Route::prefix('/admin')->name('admin.')->group(function(){
    /*---------------| Backend Guest Group |---------------*/
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminsController::class, 'login'])->name('login');
        Route::post('/login', [AdminsController::class, 'check']);
        Route::get('/forget-password', [AdminsController::class, 'resetLink'])->name('reset');
        Route::post('/forget-password', [AdminsController::class, 'resetPassword']);
    });
    
    /**Backend Aurh Group*/
    Route::middleware('auth')->group(function () {
        // Team Member Managed
        Route::get('/active/teams', [AdminsController::class, 'Active'])->name('ActiveTeam');
        Route::get('/inactive/teams', [AdminsController::class, 'Inactive'])->name('InactiveTeam');
        Route::get('/register', [AdminsController::class, 'createRegister'])->name('register');
        Route::post('/register', [AdminsController::class, 'storeRegister']);
        Route::get('/dashboard', [AdminsController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminsController::class, 'signOut'])->name('logout');
        //Member Profile
        Route::get('/team/{username}', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/team/{username}/edit', [ProfileController::class, 'editProfile'])->name('editProfile');
        // Services Managed
        Route::get('/services', [ServiceController::class, 'index'])->name('serviceIndex');
        Route::get('/add/new/service', [ServiceController::class, 'create'])->name('createservice');
        Route::post('/add/new/service', [ServiceController::class, 'store']);
        Route::get('/edit/service/{id}', [ServiceController::class, 'edit'])->name('editService');
        Route::post('/edit/service/{id}', [ServiceController::class, 'update']);
        Route::get('/status/services/{id}', [ServiceController::class, 'status'])->name('statusService');
        Route::get('/delete/services/{id}', [ServiceController::class, 'destroy'])->name('deleteService');
        // HomeController {Banner Section}
        Route::get('/home-banners/settings', [HomeController::class, 'homeBanners'])->name('homeBanners');
        Route::post('/home-banners/settings', [HomeController::class, 'updatehomeBanners']);
        // HomeController {Abouts Section}
        Route::get('/home-abouts/settings', [HomeController::class, 'homeAbouts'])->name('homeAbouts');
        Route::post('/home-abouts/settings', [HomeController::class, 'updateHomeAbouts']);
        Route::get('/abouts/settings', [AboutsController::class, 'edit'])->name('Abouts');
        Route::post('/abouts/settings', [AboutsController::class, 'update']);
        Route::post('/chooseus/settings', [AboutsController::class, 'chooseus'])->name('chooseus');
        Route::post('/faq/settings', [AboutsController::class, 'faqAbouts'])->name('faqAbouts');
        // HomeController {Contacts Section}
        Route::get('/home-contacts/settings', [HomeController::class, 'homeContacts'])->name('homeContacts');
        Route::post('/home-contacts/settings', [HomeController::class, 'updatehomeContacts']);
        // HomeController {WORK PROCESS Section}
        Route::get('/work-process/settings', [HomeController::class, 'Workprocess'])->name('Workprocess');
        Route::post('/work-process/settings', [HomeController::class, 'updateWorkprocess']);
        Route::post('/work-process/choose-service/settings', [HomeController::class, 'updateWorkprocessOne'])->name('WorkprocessOne');
        Route::post('/work-process/request-metting/settings', [HomeController::class, 'updateWorkprocessTwo'])->name('WorkprocessTwo');
        Route::post('/work-process/receive-custom-plan/settings', [HomeController::class, 'updateWorkprocessThree'])->name('WorkprocessThree');
        Route::post('/work-process/make-it-Happen/settings', [HomeController::class, 'updateWorkprocessFour'])->name('WorkprocessFour');
        // ProjectsController {Abouts Section}
        Route::get('/project/index', [ProjectsController::class, 'index'])->name('projectIndex');
        Route::get('/project/create', [ProjectsController::class, 'create'])->name('projectCreate');
        Route::post('/project/create', [ProjectsController::class, 'store']);
        Route::get('/portfolio/edit/{id}', [ProjectsController::class, 'edit'])->name('projectEdit');
        Route::post('/portfolio/edit/{id}', [ProjectsController::class, 'update']);
        Route::get('portfolio/status/{id}', [ProjectsController::class, 'ProjectDisplay'])->name('ProjectDisplay');
        // FAQController {Abouts Section}
        Route::get('/FAQ/list', [FAQController::class, 'index'])->name('FAQIndex');
        Route::get('/FAQ/create', [FAQController::class, 'create'])->name('FAQCreate');
        Route::post('/FAQ/create', [FAQController::class, 'store']);
        Route::get('/FAQ/edit/{id}', [FAQController::class, 'edit'])->name('FAQEdit');
        Route::post('/FAQ/edit/{id}', [FAQController::class, 'update']);
        Route::get('FAQ/status/{id}', [FAQController::class, 'status'])->name('FAQstatus');
        // BlogsController
        Route::get('/article', [BlogsController::class, 'index'])->name('articleIndex');
        Route::get('/article/create', [BlogsController::class, 'create'])->name('articleCreate');
        Route::post('/article/create', [BlogsController::class, 'store']);
        Route::get('/article/edit/{id}', [BlogsController::class, 'edit'])->name('articleEdit');
        Route::post('/article/edit/{id}', [BlogsController::class, 'update']);
        Route::get('article/status/{id}', [BlogsController::class, 'status'])->name('articlestatus');
        
        
        // SettingsController //{ Project Info }
        Route::get('/settings', [SettingsController::class, 'SettingsView'])->name('SettingsView');
        Route::post('/settings', [SettingsController::class, 'SettingUpdate']);
    });

});
