<?php

namespace Neoxia\Filesystem;

use Illuminate\Filesystem\FilesystemManager as BaseFilesystemManager;

class FilesystemManager extends BaseFilesystemManager
{
    public function getSecureUrl($relativePath)
    {
        return asset($relativePath);
    }
}
