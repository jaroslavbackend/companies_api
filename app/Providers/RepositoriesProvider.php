<?php

namespace App\Providers;

use App\Models\Company;
use App\Repositories\Company\CompanyRepository;
use App\Repositories\Company\CompanyRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
        $this->app->when(CompanyRepository::class)
            ->needs(Model::class)
            ->give(Company::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
