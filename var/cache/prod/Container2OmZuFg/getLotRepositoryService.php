<?php

namespace Container2OmZuFg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLotRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LotRepository' shared autowired service.
     *
     * @return \App\Repository\LotRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LotRepository'] = new \App\Repository\LotRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}