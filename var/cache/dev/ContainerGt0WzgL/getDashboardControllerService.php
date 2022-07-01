<?php

namespace ContainerGt0WzgL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'DashboardController.php';

        $container->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'message_bus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'messenger.default_bus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'session' => ['privates', '.session.deprecated', 'get_Session_DeprecatedService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'message_bus' => '?',
            'messenger.default_bus' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '.session.deprecated',
            'twig' => '?',
        ]))->withContext('App\\Controller\\Admin\\DashboardController', $container));

        return $instance;
    }
}
