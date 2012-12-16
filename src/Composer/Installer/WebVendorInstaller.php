<?php

namespace Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class WebVendorInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return implode(DIRECTORY_SEPARATOR, array('web', 'vendor', $package->getPrettyName()));
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'web-vendor' === $packageType;
    }
}
