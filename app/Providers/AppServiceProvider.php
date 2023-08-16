<?php

namespace App\Providers;

use App\Models\AboutUsSetting;
use App\Models\ContactUsSetting;
use App\Models\Resturant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $aboutUs=AboutUsSetting::first();
        $contact=ContactUsSetting::first();
        Paginator::useBootstrap();
        
        View::share(['aboutUs'=>$aboutUs ,'contact'=>$contact]);

        //
    }
}
