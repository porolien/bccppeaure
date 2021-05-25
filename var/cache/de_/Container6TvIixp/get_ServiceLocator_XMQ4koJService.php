<?php

namespace Container6TvIixp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XMQ4koJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xMQ4koJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xMQ4koJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'acheteur' => ['privates', '.errored..service_locator.xMQ4koJ.App\\Entity\\Acheteur', NULL, 'Cannot autowire service ".service_locator.xMQ4koJ": it references class "App\\Entity\\Acheteur" but no such service exists.'],
        ], [
            'acheteur' => 'App\\Entity\\Acheteur',
        ]);
    }
}
