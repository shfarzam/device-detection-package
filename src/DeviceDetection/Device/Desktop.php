<?php

namespace shfarzam\DeviceDetection;

// Class for Desktop device
class Desktop extends AbstractDevice
{
    public function isDevice(): bool
    {
        return !($this instanceof MobileDevice || $this instanceof TabletDevice);
    }

    public function getDeviceInfo(): array
    {
        // Sample device information for a desktop device
        return [
            'type' => 'Desktop',
            'os' => 'Unknown', // You can extract OS information here
            // Add more details as needed...
        ];
    }
}