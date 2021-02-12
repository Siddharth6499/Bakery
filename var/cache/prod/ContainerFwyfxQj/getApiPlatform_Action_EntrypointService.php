<?php

namespace ContainerFwyfxQj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_EntrypointService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\Core\Action\EntrypointAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.entrypoint'] = new \ApiPlatform\Core\Action\EntrypointAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }
}
