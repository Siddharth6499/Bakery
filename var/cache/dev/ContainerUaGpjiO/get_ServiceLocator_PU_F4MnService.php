<?php

namespace ContainerUaGpjiO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PU_F4MnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PU.f4Mn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PU.f4Mn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.PU.f4Mn.EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityUpdatedEvent', NULL, 'Cannot autowire service ".service_locator.PU.f4Mn": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityUpdatedEvent" but no such service exists.'],
        ], [
            'event' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityUpdatedEvent',
        ]);
    }
}
