<?php

namespace Container2OmZuFg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLotControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LotController' shared autowired service.
     *
     * @return \App\Controller\LotController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LotController'] = $instance = new \App\Controller\LotController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\LotController', $container));

        return $instance;
    }
}
