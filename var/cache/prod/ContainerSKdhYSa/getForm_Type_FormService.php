<?php

namespace ContainerSKdhYSa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_FormService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
