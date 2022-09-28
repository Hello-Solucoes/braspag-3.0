<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 09:00
 */

namespace Braspag\Providers;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class BraspagApiServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'braspag_api');
    }

    /**
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->getConfigPath() => config_path('braspag_api.php'),
        ]);
    }

    /**
     * @return string
     */
    private function getConfigPath()
    {
        return __DIR__ . '/../../config/braspag_api.php';
    }
}
