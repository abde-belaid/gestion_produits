<?php

namespace App\Providers;

use App\Models\Produit;
use App\Policies\ProduitPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate as FacadesGate;
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
    protected $policies = [
        Produit::class => ProduitPolicy::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        FacadesGate::define('view-dashboard', function ($user) {
            return $user->isAdmin();
        });
    }
}
