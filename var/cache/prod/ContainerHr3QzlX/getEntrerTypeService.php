<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrerTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EntrerType' shared autowired service.
     *
     * @return \App\Form\EntrerType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EntrerType'] = new \App\Form\EntrerType();
    }
}
