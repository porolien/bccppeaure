<?php

namespace Container2OmZuFg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcheteurRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AcheteurRepository' shared autowired service.
     *
     * @return \App\Repository\AcheteurRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AcheteurRepository'] = new \App\Repository\AcheteurRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}