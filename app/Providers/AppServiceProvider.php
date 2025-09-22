<?php

namespace App\Providers;

use App\Models\Subdomain;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
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
        
        view()->composer('*', function ($view) {
            $menus = Cache::rememberForever('menus_' . request()->subdomain, function () {
                return \App\Models\Menu::where('subdomain', request()->subdomain)
                ->with('submenu')
                ->orderBy('created_at', 'asc') 
                ->get();
            });

    
            // $view->with('menus', $menus);

           // Batasan limit jumlah menu hanya untuk desktop, tidak untuk mobile/tablet
            $maxVisibleMenus = 5;
            $visibleMenus = $menus->take($maxVisibleMenus);
            $extraMenus = $menus->slice($maxVisibleMenus);

            $view->with('menus', $menus)
             ->with('visibleMenus', $visibleMenus)
             ->with('extraMenus', $extraMenus);
        });

        view()->composer('*', function ($view) {
            $pengaturan = Cache::rememberForever('pengaturan_' . request()->subdomain, function () {
                return \App\Models\Pengaturan::with('subdomain') // load relasi
                    ->where('subdomain', request()->subdomain)
                    ->first();
            });

            $view->with('pengaturan', $pengaturan);
        });

    }
}