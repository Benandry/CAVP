<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMouvementCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\MouvementCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\MouvementCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\MouvementCrudController'] = $instance = new \App\Controller\Admin\MouvementCrudController();

        $instance->setContainer(($container->privates['.service_locator.Pq4jHMT'] ?? $container->load('get_ServiceLocator_Pq4jHMTService'))->withContext('App\\Controller\\Admin\\MouvementCrudController', $container));

        return $instance;
    }
}