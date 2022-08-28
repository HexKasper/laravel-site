<?php

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Lang;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        $this->registerPolicies();

        Gate::define('author-rights', function (User $user) {
            return $user->role == 'admin' or $user->role == 'author';
        });

        $menu_categories=Category::select('title','slug')->orderBy('title')->where('publish',1)->get();
        View::share('menu_categories', $menu_categories);

        Paginator::useBootstrap();
    }
}

