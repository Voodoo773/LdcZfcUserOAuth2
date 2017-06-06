<?php
namespace LdcZfcUserOAuth2\Storage;

use ZF\OAuth2\Adapter\PdoAdapter;

class ZfcUserPdo extends PdoAdapter
{
    /**
     * @var ZfcUserStorageBridge
     */
    protected $bridge;

    public function __construct($connection, $config, ZfcUserStorageBridge $bridge)
    {
        parent::__construct($connection, $config);
        $this->bridge = $bridge;
    }

    public function checkUserCredentials($username, $password)
    {
        return $this->bridge->checkUserCredentials($username, $password);
    }

    public function getUserDetails($username)
    {
        return $this->bridge->getUserDetails($username);
    }
}
