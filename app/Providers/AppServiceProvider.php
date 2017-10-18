<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Archives
        view()->composer('layouts.archives', function ($view) {
            $view->with('archives', \App\Post::archives());
        });

        // Tags (get all tags that have posts)
        view()->composer('*', function ($view) {
            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });

        // Quotes
        view()->composer('*', function ($view) {
            $view->with('quotes', \App\Quote::quotes());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
