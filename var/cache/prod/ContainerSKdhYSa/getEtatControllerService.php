<?php

namespace ContainerSKdhYSa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEtatControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\EtatController' shared autowired service.
     *
     * @return \App\Controller\EtatController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EtatController'] = $instance = new \App\Controller\EtatController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\EtatController', $container));

        return $instance;
    }
}