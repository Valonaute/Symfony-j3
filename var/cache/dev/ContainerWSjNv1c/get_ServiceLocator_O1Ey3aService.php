<?php

namespace ContainerWSjNv1c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O1Ey3aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o_1Ey3a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o_1Ey3a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repositoryCustomer' => ['privates', 'App\\Repository\\CustomersRepository', 'getCustomersRepositoryService', true],
        ], [
            'repositoryCustomer' => 'App\\Repository\\CustomersRepository',
        ]);
    }
}