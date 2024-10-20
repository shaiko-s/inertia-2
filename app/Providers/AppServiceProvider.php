<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Vite;
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
        Vite::prefetch(concurrency: 3);

        // Define a custom morph map for polymorphic relationships.
        // This allows the use of 'ingredient', 'semiproduct', and 'finalproduct' as type names
        // in the database instead of the fully qualified class names.
        // This makes the database entries more readable and easier to manage.
        Relation::morphMap([
            'ingredient' => 'App\Models\Ingredient',
            'semiproduct' => 'App\Models\Semiproduct',
            'finalproduct' => 'App\Models\Finalproduct',
        ]);
    }
}
