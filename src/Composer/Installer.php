<?php


namespace SamKer\HtapInstaller;


use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller
{

    public function supports($packageType)
    {
        die('Installer support');
        return parent::supports($packageType); // TODO: Change the autogenerated stub
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        die("ici le installer".$package->getPrettyName());
//        $prefix = substr($package->getPrettyName(), 0, 23);
//        if ('phpdocumentor/template-' !== $prefix) {
//            throw new \InvalidArgumentException(
//                'Unable to install template, phpdocumentor templates '
//                .'should always start their package name with '
//                .'"phpdocumentor/template-"'
//            );
//        }
//
//        return 'data/templates/'.substr($package->getPrettyName(), 23);
    }

}