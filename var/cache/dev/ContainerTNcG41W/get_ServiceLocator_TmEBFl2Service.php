<?php

namespace ContainerTNcG41W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TmEBFl2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TmEBFl2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TmEBFl2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lot' => ['privates', '.errored..service_locator.TmEBFl2.App\\Entity\\Lot', NULL, 'Cannot autowire service ".service_locator.TmEBFl2": it references class "App\\Entity\\Lot" but no such service exists.'],
        ], [
            'lot' => 'App\\Entity\\Lot',
        ]);
    }
}
