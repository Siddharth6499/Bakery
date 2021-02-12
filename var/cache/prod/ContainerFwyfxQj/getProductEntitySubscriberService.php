<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductEntitySubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\EventSubscriber\ProductEntitySubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ProductEntitySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\EventSubscriber\\ProductEntitySubscriber'] = $instance = new \App\EventSubscriber\ProductEntitySubscriber(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en'))));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\EventSubscriber\\ProductEntitySubscriber', $container));

        return $instance;
    }
}
