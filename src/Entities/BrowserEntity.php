<?php


namespace BraspagApi\Entities;


class BrowserEntity
{
    /**
     * @var $cookiesAccepted
     */
    private $cookiesAccepted;

    /**
     * @var $email
     */
    private $email;

    /**
     * @var $hostName
     */
    private $hostName;

    /**
     * @var $ipAddress
     */
    private $ipAddress;

    /**
     * @var $type
     */
    private $type;

    /**
     * @return mixed
     */
    public function getCookiesAccepted()
    {
        return $this->cookiesAccepted;
    }

    /**
     * @param mixed $cookiesAccepted
     * @return BrowserEntity
     */
    public function setCookiesAccepted($cookiesAccepted)
    {
        $this->cookiesAccepted = $cookiesAccepted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return BrowserEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param mixed $hostName
     * @return BrowserEntity
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     * @return BrowserEntity
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return BrowserEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}
