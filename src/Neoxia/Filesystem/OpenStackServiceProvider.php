<?php

namespace Neoxia\Filesystem;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use League\Flysystem\Rackspace\RackspaceAdapter;
use OpenCloud\OpenStack;

class OpenStackServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $filesystem = $this->app->make('filesystem');

        $filesystem->extend('openstack', function($app, $config) {
            $client = new OpenStack($config['endpoint'], [
                'username' => $config['username'],
                'password' => $config['password'],
                'tenantId' => $config['tenant_id'],
                'tenantName' => $config['tenant_name'],
            ]);

            $store = $client->objectStoreService($config['service_name'], $config['region']);
            $container = $store->getContainer($config['container']);

            return new Filesystem(new RackspaceAdapter($container));
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
