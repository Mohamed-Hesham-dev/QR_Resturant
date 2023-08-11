<?php

use App\Http\Controllers\Administration\AboutUsSettingController;
use App\Http\Controllers\Administration\ContactUsSettingController;
use App\Http\Controllers\Administration\DashboardController;
use App\Http\Controllers\Administration\PackageController;
use App\Http\Controllers\Administration\ResturantController;
use App\Http\Controllers\WebSite\HomeController;
use App\Http\Controllers\WebSite\WebSiteResturantController;
use App\Http\Controllers\WebSite\WebSiteUserLoginController;
use App\Http\Controllers\WebSite\WebSiteUserRegisterController;
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




Route::get('admin/login',[DashboardController::class, 'loginAdmin'])->name('admin.login');
Route::post('admin/login',[DashboardController::class, 'login']);
Route::group(['middleware'=>['is_admin'],'prefix'=>'admin'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('resturant', ResturantController::class)->names('resturant');
    Route::resource('package', PackageController::class)->names('package');
    Route::get('contactUsSetting/edit',[ContactUsSettingController::class,'edit'])->name("contactUsSetting.edit");
    Route::put('contactUsSetting/update/{id}',[ContactUsSettingController::class,'update'])->name("contactUsSetting.update");
    Route::get('aboutUsSetting/edit',[AboutUsSettingController::class,'edit'])->name("aboutUsSetting.edit");
    Route::put('aboutUsSetting/update/{id}',[AboutUsSettingController::class,'update'])->name("aboutUsSetting.update");
    Route::post('logout',[DashboardController::class,'logout'])->name('logout');

});










/*frontend Routing*/
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('resturant',[WebSiteResturantController::class,'index'])->name('resturant');
Route::get('login',[WebSiteUserLoginController::class,'index'])->name('login_user.index');
Route::post('login',[WebSiteUserLoginController::class,'loginUser'])->name('login_user.loginUser');
Route::get('logout',[WebSiteUserLoginController::class,'logout'])->name('logout_user.logout');
Route::get('signUp',[WebSiteUserRegisterController::class,'index'])->name('register_user.index');
Route::post('signUp',[WebSiteUserRegisterController::class,'store'])->name('register_user.store');
