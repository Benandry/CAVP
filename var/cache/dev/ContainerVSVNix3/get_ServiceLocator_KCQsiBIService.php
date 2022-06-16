<?php

namespace ContainerVSVNix3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KCQsiBIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kCQsiBI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kCQsiBI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mouvementRepository' => ['privates', 'App\\Repository\\MouvementRepository', 'getMouvementRepositoryService', true],
        ], [
            'mouvementRepository' => 'App\\Repository\\MouvementRepository',
        ]);
    }
}
