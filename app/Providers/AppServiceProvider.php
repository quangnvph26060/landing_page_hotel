<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\TitleFunction;
use App\Models\ZaloOa;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        $config_all = Config::first();
        $titleFunction = TitleFunction::first();
        $config = Config::first();
        $zaloOa = ZaloOa::first() ?? [];
        $banner = Banner::first();
        View::share('config', $config);
        View::share('banner', $banner);
        View::share('config_all', $config_all);
        View::share('titleFunction', $titleFunction);
        View::share('zaloOa', $zaloOa);
        // $myService = app(\App\Services\TemplateService::class);
        // $myService->template();
    }
}