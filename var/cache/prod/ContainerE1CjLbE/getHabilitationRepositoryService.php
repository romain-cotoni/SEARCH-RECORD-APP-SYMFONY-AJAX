<?php

namespace ContainerE1CjLbE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabilitationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\HabilitationRepository' shared autowired service.
     *
     * @return \App\Repository\HabilitationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\HabilitationRepository'] = new \App\Repository\HabilitationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
