<?php

namespace shfarzam\DeviceDetection;

// Abstract class for Device
abstract class AbstractDevice implements DeviceDetailsInterface
{
    protected $userAgent;

    public function __construct($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    abstract function isDevice(): bool;

    public function getDeviceSignature(): string
    {
        return hash('sha256', $this->userAgent); // Create a simple signature using user agent
    }
}