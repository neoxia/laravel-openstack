<?php

namespace Neoxia\Filesystem;

use Illuminate\Filesystem\FilesystemManager as BaseFilesystemManager;
use Illuminate\Filesystem\FilesystemServiceProvider as BaseFilesystemServiceProvider;

class FilesystemServiceProvider extends BaseFilesystemServiceProvider
{
    protected function registerManager()
    {
        $this->app->singleton('filesystem', function () {
            if (env('FILE_DRIVER') != 'openstack') {
                return new FilesystemManager($this->app);
            } else {
                return new BaseFilesystemManager($this->app);
            }
        });
    }
}
