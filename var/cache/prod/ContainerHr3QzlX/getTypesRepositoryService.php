<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypesRepository' shared autowired service.
     *
     * @return \App\Repository\TypesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypesRepository'] = new \App\Repository\TypesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}