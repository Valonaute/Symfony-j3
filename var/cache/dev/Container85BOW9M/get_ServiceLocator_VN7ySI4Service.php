<?php

namespace Container85BOW9M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VN7ySI4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VN7ySI4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VN7ySI4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'addressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
        ], [
            'addressRepository' => 'App\\Repository\\AddressRepository',
        ]);
    }
}
