<?php

namespace Container4G9oIug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Register' shared autowired service.
     *
     * @return \App\Form\Register
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Register'] = new \App\Form\Register();
    }
}
