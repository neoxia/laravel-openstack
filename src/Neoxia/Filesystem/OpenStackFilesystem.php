<?php

namespace Neoxia\Filesystem;

use League\Flysystem\Filesystem as BaseFilesystem;

class OpenStackFileSystem extends BaseFilesystem
{
    public function getSecureUrl($relativePath)
    {
        try {
            return $this->adapter->getContainer()->getObject($relativePath)->getTemporaryUrl(60, 'GET');
        } catch (\Exception $e) {
            \Log::warning('Could not fetch ' . $relativePath);
        }
    }
}
