<?php

use App\Http\Controllers\Administration\AboutUsSettingController;
use App\Http\Controllers\Administration\ContactUsSettingController;
use App\Http\Controllers\Administration\UserController;

use App\Http\Controllers\Administration\DashboardController;
use App\Http\Controllers\Administration\PackageController;
use App\Http\Controllers\Administration\RequestsController;
use App\Http\Controllers\Administration\ResturantController;
use App\Http\Controllers\FoodcourtController;
use App\Http\Controllers\OwnerResturant\Account;
use App\Http\Controllers\OwnerResturant\FeedbackController;
use App\Http\Controllers\OwnerResturant\LiveordersController;
use App\Http\Controllers\OwnerResturant\OrdersController;
use App\Http\Controllers\OwnerResturant\ReservationController;
use App\Http\Controllers\OwnerResturant\ResturantAboutUsSettingController;
use App\Http\Controllers\OwnerResturant\ResturantCategoryDashboardController;
use App\Http\Controllers\OwnerResturant\ResturantContactUsSettingController;
use App\Http\Controllers\OwnerResturant\ResturantDashboardController;
use App\Http\Controllers\OwnerResturant\ResturantTableDashboardController;
use App\Http\Controllers\OwnerResturant\ResturantOptionDashboardController;
use App\Http\Controllers\OwnerResturant\ResturantProductDashboardController;
use App\Http\Controllers\WebSite\CartController;
use App\Http\Controllers\WebSite\HomeController;
use App\Http\Controllers\WebSite\WebSiteFoodCourtController;
use App\Http\Controllers\WebSite\WebSiteResturantController;
use App\Http\Controllers\WebSite\WebSiteUserLoginController;
use App\Http\Controllers\WebSite\WebSiteUserRegisterController;
use GuzzleHttp\Psr7\Request;
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
    Route::resource('foodcourt',FoodcourtController::class)->names('admin.foodcourt');

    Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('resturant', ResturantController::class)->names('resturant');
    Route::get('/qrcode/{id}', [ResturantController::class, 'generate'])->name('resturant.qrcode.generate');
    Route::resource('request', RequestsController::class)->names('request');
    Route::resource('package', PackageController::class)->names('package');
    Route::get('user',[UserController::class,'index'])->name('users');
    Route::get('user/{id}',[UserController::class,'deleteuser'])->name('delete.user');
    Route::get('contactUsSetting/edit',[ContactUsSettingController::class,'edit'])->name("contactUsSetting.edit");
    Route::put('contactUsSetting/update/{id}',[ContactUsSettingController::class,'update'])->name("contactUsSetting.update");
    Route::get('aboutUsSetting/edit',[AboutUsSettingController::class,'edit'])->name("aboutUsSetting.edit");
    Route::put('aboutUsSetting/update/{id}',[AboutUsSettingController::class,'update'])->name("aboutUsSetting.update");
    Route::post('logout',[DashboardController::class,'logout'])->name('logout');

});
Route::get('owner/login',[ResturantDashboardController::class, 'loginowner'])->name('owner.login');
Route::post('owner/login',[ResturantDashboardController::class, 'loginOwnerResturant']);
Route::group(['middleware'=>['is_owner'],'prefix'=>'owner'], function () {
    Route::get('/', [ResturantDashboardController::class,'index'])->name('dashboard');
     Route::resource('resturantTableDashboard', ResturantTableDashboardController::class)->names('table');
     Route::get('/qrcode/{id}', [ResturantTableDashboardController::class, 'generate'])->name('qrcode.generate');

     Route::resource('resturantCategoryDashboard', ResturantCategoryDashboardController::class)->names('categories');
     Route::resource('resturantOptionDashboard', ResturantOptionDashboardController::class)->names('options');
     Route::resource('resturantProductDashboard', ResturantProductDashboardController::class)->names('products');
     Route::get('contactUsSettingResturant/edit',[ResturantContactUsSettingController::class,'edit'])->name("contactUsSettingResturant.edit");
     Route::post('contactUsSettingResturant/update',[ResturantContactUsSettingController::class,'update'])->name("contactUsSettingResturant.update");
     Route::get('aboutUsSetting/edit',[ResturantAboutUsSettingController::class,'edit'])->name("aboutUsSettingResturant.edit");
     Route::put('aboutUsSetting/update/{id}',[ResturantAboutUsSettingController::class,'update'])->name("aboutUsSettingResturant.update");
     Route::resource('orders',OrdersController::class)->names('orders');
     Route::resource('liveorders',LiveordersController::class)->names('liveorders');
     Route::get('reservaition',[ReservationController::class,'index'])->name("Reservation.dashboard");
     Route::resource('feedback', FeedbackController::class)->names('feedback');
     Route::resource('account',Account::class)->names('account');

     Route::post('reservaition/destroy/{id}',[ReservationController::class,'destroy'])->name("reservation.destroy");

    // Route::get('contactUsSetting/edit',[ContactUsSettingController::class,'edit'])->name("contactUsSetting.edit");
    // Route::put('contactUsSetting/update/{id}',[ContactUsSettingController::class,'update'])->name("contactUsSetting.update");
    // Route::get('aboutUsSetting/edit',[AboutUsSettingController::class,'edit'])->name("aboutUsSetting.edit");
    // Route::put('aboutUsSetting/update/{id}',[AboutUsSettingController::class,'update'])->name("aboutUsSetting.update");
    Route::post('logout',[DashboardController::class,'logoutOwner'])->name('owner.logout');

});










/*frontend Routing*/


Route::get('/',[HomeController::class,'index'])->name('index');
Route::post('/',[HomeController::class,'clientform'])->name('clientform');
Route::get('/scan-qr-code/{table_number}/{restaurant_id}', [WebSiteResturantController::class, 'scanQRCode'])->name('scanQRCode');
Route::get('resturant',[WebSiteResturantController::class,'index'])->name('resturant');
Route::get('resturant/{id}/{res}',[WebSiteResturantController::class,'index'])->name('resturant');
Route::get('/category/{id}/{restid}',[WebSiteResturantController::class,'filter'])->name('fil');
Route::get('/get-images/{resturantId}', [WebSiteResturantController::class,'getImages']);
Route::post('reservation',[WebSiteResturantController::class,'reservation'])->name('reservation');
Route::post('feedback',[WebSiteResturantController::class,'feedback'])->name('feedback');


Route::get('login',[WebSiteUserLoginController::class,'index'])->name('login_user.index');
Route::post('login',[WebSiteUserLoginController::class,'loginUser'])->name('login_user.loginUser');
Route::get('logout',[WebSiteUserLoginController::class,'logout'])->name('logout_user.logout');
Route::get('signUp',[WebSiteUserRegisterController::class,'index'])->name('register_user.index');
Route::post('signUp',[WebSiteUserRegisterController::class,'store'])->name('register_user.store');
Route::resource('cart',CartController::class)->names('cart');
Route::post('/cart/store', [CartController::class,'storee'])->name('cart.storee');
Route::get('/cart/destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');
Route::resource('foodcourt',WebSiteFoodCourtController::class)->names('foodcourt');
