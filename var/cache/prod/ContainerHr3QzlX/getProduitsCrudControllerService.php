<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitsCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\ProduitsCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProduitsCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\ProduitsCrudController'] = $instance = new \App\Controller\Admin\ProduitsCrudController();

        $instance->setContainer(($container->privates['.service_locator.Pq4jHMT'] ?? $container->load('get_ServiceLocator_Pq4jHMTService'))->withContext('App\\Controller\\Admin\\ProduitsCrudController', $container));

        return $instance;
    }
}
