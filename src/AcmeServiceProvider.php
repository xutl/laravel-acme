<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Acme;

use Illuminate\Support\ServiceProvider;
use LEClient\LEClient;

/**
 * Class AcmeServiceProvider
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class AcmeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->setupConfig();

        $this->app->singleton('acme', function () {
            return $client = new LEClient($this->app['config']['acme.email'], $this->app['config']['acme.acmeURL'],
                $this->app['config']['acme.log'], $this->app['config']['acme.certificateKeys'], $this->app['config']['acme.accountKeys']);
        });
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath($raw = __DIR__ . '/../config/acme.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $source => config_path('acme.php'),
            ], 'acme-config');
        }

        $this->mergeConfigFrom($source, 'acme');
    }
}