<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Guide;
use App\Policies\GuidePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
    
        Guide::class => GuidePolicy::class,






    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
