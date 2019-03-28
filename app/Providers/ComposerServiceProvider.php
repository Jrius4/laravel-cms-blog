<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.siderbar', function($view){
            $categories = Category::with([
                'posts'
                => function ($query) {
                    $query->published();
                }
            ])->orderBy('title', 'asc')->get();

            return $view->with('categories',$categories);
        });

        view()->composer('layouts.siderbar',function($view){
                $popularPosts=Post::published()->popular()->take(5)->get();
                return $view->with('popularPosts',$popularPosts);
        });
    }
}
