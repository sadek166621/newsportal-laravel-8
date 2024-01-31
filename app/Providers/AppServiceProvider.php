<?php

namespace App\Providers;

use App\ads;
use App\category;
use App\logo;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view::composer('*', function ($view) {

            $view->with('popupads',ads::where('start_ads', '<=', Carbon::now())
                ->where('end_ads', '>=', Carbon::now())
                ->where('publication_status',1)
                ->take(1)
                ->orderby('id','desc')
                ->get());

            $view->with([
                'categories'=>DB::table('categories')
                    ->orderby('id','asc')
                    ->paginate(11)
            ]);

            $view->with([
                'headers'=>ads::where('start_ads', '<=', Carbon::now())
                    ->where('end_ads', '>=', Carbon::now())
                    ->where('publication_status',1)
                    ->where('positon',1)
                    ->orderby('id','desc')
                    ->get()
            ]);

            $view->with([
                'logos'=>DB::table('logos')->where('publication_status',1)->orderby('id','desc')->take(1)->first()
            ]);
            $view->with([
                'Trendingnews'=>DB::table('trendingnews')->where('publication_status',1)->orderby('id','desc')->take(1)->first()
            ]);
        });
    }
}
