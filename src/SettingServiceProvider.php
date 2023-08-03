<?php
/**
 * @author Deepak Pandey <er.pandeydip@gmail.com>.
 * Created On: 2023-08-03 10:31
 */

namespace Pandeydip\LaravelSettings;

use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/setting.php' => config_path('setting.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/setting.php',
            'setting'
        );

        $this->app->singleton('setting', function () {
            return new SettingManager();
        });
    }
}
