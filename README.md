[![Latest Stable Version](http://img.shields.io/github/release/neoxia/laravel-openstack.svg)](https://packagist.org/packages/neoxia/laravel-openstack)

## Laravel OpenStack

This package provide a service provider to add the "openstack" driver to Laravel Storage.

## Installation

In order to install this package, add `neoxia/laravel-openstack` in `composer.json`.

```JS
"require": {
    "neoxia/laravel-openstack": "1.0.*"
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
        'username'      => env('OS_USERNAME', ''),
        'password'      => env('OS_PASSWORD', ''),
        'container'     => env('OS_CONTAINER', ''),
        'tenant_name'   => env('OS_TENANT_NAME', ''),
        'endpoint'      => env('OS_ENDPOINT', ''),
        'service_name'  => env('OS_SERVICE_NAME', 'swift'),
        'region'        => env('OS_REGION', ''),
    ],

],
```
