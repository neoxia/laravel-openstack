<?php

namespace Neoxia\Filesystem;

use League\Flysystem\Filesystem as BaseFilesystem;

class OpenStackFileSystem extends BaseFilesystem
{
    public function getSecureUrl($relativePath)
    {
        return $this->adapter->getContainer()->getObject($relativePath)->getTemporaryUrl(60, 'GET');
    }
}
