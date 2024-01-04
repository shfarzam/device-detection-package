<?php

namespace shfarzam\DeviceDetection;

// Interface for Device Details
interface DeviceDetailsInterface
{
    public function getDeviceInfo(): array;

    public function getDeviceSignature(): string;
}