<?php

namespace Container4G9oIug;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_ValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.validator'] = ($container->privates['validator.builder'] ?? $container->load('getValidator_BuilderService'))->getValidator();
    }
}
