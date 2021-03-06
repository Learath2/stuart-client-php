<?php

namespace Stuart;

class DropOff extends Location
{
    private $packageType;
    private $packageDescription;
    private $clientReference;

    public function getPackageType()
    {
        return $this->packageType;
    }

    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    public function getPackageDescription()
    {
        return $this->packageDescription;
    }

    public function setPackageDescription($packageDescription)
    {
        $this->packageDescription = $packageDescription;
        return $this;
    }

    public function getClientReference()
    {
        return $this->clientReference;
    }

    public function setClientReference($clientReference)
    {
        $this->clientReference = $clientReference;
        return $this;
    }
}
