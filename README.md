[![Latest Stable Version](http://img.shields.io/github/release/neoxia/laravel-openstack.svg)](https://packagist.org/packages/neoxia/laravel-openstack)

## Laravel OpenStack

This package provides a service provider to add a driver for OpenStack Object Storage (swift) to Laravel Storage.

## Installation

In order to install this package, add `neoxia/laravel-openstack` in `composer.json`.

```JS
"require": {
    "neoxia/laravel-openstack": "1.1.*"
},
```

And add the service provider in `config/app.php`.

```PHP
Neoxia\Filesystem\OpenStackServiceProvider::class,
```

## Configuration

To configure a new Laravel storage disk on OpenStack, provide a configuration like this one in `config/filesystems.php`

```PHP
'disks' => [

    'openstack' => [
        'driver'        => 'openstack',
        'endpoint'      => env('OS_ENDPOINT', ''),
        'username'      => env('OS_USERNAME', ''),
        'password'      => env('OS_PASSWORD', ''),
        'tenant_id'     => env('OS_TENANT_ID', ''),
        'tenant_name'   => env('OS_TENANT_NAME', ''),
        'container'     => env('OS_CONTAINER', ''),
        'region'        => env('OS_REGION', ''),
        'service_name'  => env('OS_SERVICE_NAME', 'swift'),
    ],

],
```

Note that the implementation of OpenStack Object Storage varies from one provider to an other. For instance, the configuration of the `tenant_id` and/or of the `tenant_name` is not always mandatory.
