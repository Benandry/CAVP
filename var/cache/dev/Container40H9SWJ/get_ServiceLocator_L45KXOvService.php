<?php

namespace Container40H9SWJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L45KXOvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l45KXOv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l45KXOv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mouvement' => ['privates', '.errored..service_locator.l45KXOv.App\\Entity\\Mouvement', NULL, 'Cannot autowire service ".service_locator.l45KXOv": it references class "App\\Entity\\Mouvement" but no such service exists.'],
        ], [
            'mouvement' => 'App\\Entity\\Mouvement',
        ]);
    }
}
