<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHistoriqueControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HistoriqueController' shared autowired service.
     *
     * @return \App\Controller\HistoriqueController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HistoriqueController'] = $instance = new \App\Controller\HistoriqueController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\HistoriqueController', $container));

        return $instance;
    }
}
