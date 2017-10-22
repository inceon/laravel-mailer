<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Bunch' => 'App\Policies\BunchPolicy',
        'App\Campaign' => 'App\Policies\CampaignPolicy',
        'App\Subscriber' => 'App\Policies\SubscriberPolicy',
        'App\Template' => 'App\Policies\TemplatePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
