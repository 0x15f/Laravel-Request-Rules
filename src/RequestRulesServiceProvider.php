<?php
namespace LynnDigital\RequestRules;

use Illuminate\Support\ServiceProvider;

use LynnDigital\RequestRules\Commands\GenerateRuleCommand;
use LynnDigital\RequestRules\Commands\InstallCommand;

class RequestRulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole())
        {
            $this->commands([
                GenerateRuleCommand::class,
                InstallCommand::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
