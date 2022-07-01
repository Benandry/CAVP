<?php

namespace ContainerPLW4tDc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LDwumwZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LDwumwZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LDwumwZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'traitement' => ['privates', 'App\\Traitement\\Traitement', 'getTraitementService', true],
        ], [
            'doctrine' => '?',
            'traitement' => 'App\\Traitement\\Traitement',
        ]);
    }
}
