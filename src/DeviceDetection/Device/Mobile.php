<?php

namespace shfarzam\DeviceDetection\Device;

use shfarzam\DeviceDetection\AbstractDevice;

// Class for Mobile device
class Mobile extends AbstractDevice
{
    public function isDevice(): bool
    {
        $keyword = [
            'android',
            'webos',
            'iphone',
            'ipad',
            'ipod',
            'blackberry',
            'windows phone'
        ];

        foreach ($keyword as $keyword) {
            if (stripos($this->userAgent, $keyword) !== false) {
                return true;
            }
        }

        return false;

    }

    public function getDeviceInfo(): array
    {
        // Sample device information for a mobile device
        return [
            'type' => 'Mobile',
            'os' => 'Unknown', // You can extract OS information here
            // Add more details as needed...
        ];
    }
}
