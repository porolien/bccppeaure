<?php

namespace Container4G9oIug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJzZ1Z2Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZJzZ1Z2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZJzZ1Z2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.ZJzZ1Z2.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.ZJzZ1Z2": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
