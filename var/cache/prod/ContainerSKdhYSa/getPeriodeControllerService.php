<?php

namespace ContainerSKdhYSa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPeriodeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PeriodeController' shared autowired service.
     *
     * @return \App\Controller\PeriodeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PeriodeController'] = $instance = new \App\Controller\PeriodeController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\PeriodeController', $container));

        return $instance;
    }
}
