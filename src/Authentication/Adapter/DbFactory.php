<?php

namespace LdcZfcUserOAuth2\Authentication\Adapter;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DbFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return Db
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $db = new Db();
        $db->setServiceManager($serviceLocator);
        
        return $db;
    }
}
