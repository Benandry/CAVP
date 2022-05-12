<?php

namespace ContainerHr3QzlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.zJyh7qS'] ?? $container->get_ServiceLocator_ZJyh7qSService()), ($container->privates['.service_locator.XsyfP82'] ?? $container->load('get_ServiceLocator_XsyfP82Service')), ['main' => [0 => ($container->privates['App\\Security\\LoginAuthenticator'] ?? $container->load('getLoginAuthenticatorService'))]], true);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
