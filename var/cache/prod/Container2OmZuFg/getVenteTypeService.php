<?php

namespace Container2OmZuFg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVenteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\VenteType' shared autowired service.
     *
     * @return \App\Form\VenteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\VenteType'] = new \App\Form\VenteType();
    }
}
