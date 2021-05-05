<?php

namespace ContainerPMwK3HM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineSecurableRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Backend\Infrastructure\Repository\User\DoctrineSecurableRepository' shared autowired service.
     *
     * @return \App\Backend\Infrastructure\Repository\User\DoctrineSecurableRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Backend/Infrastructure/Repository/User/DoctrineSecurableRepository.php';

        return $container->privates['App\\Backend\\Infrastructure\\Repository\\User\\DoctrineSecurableRepository'] = new \App\Backend\Infrastructure\Repository\User\DoctrineSecurableRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
