<?php

namespace shfarzam\DeviceDetection;

// Class for Tablet device
class Tablet extends AbstractDevice
{
    public function isDevice(): bool
    {
        $keyword = [
            'ipad',
            'ipod',
            'android',
            'mobile'
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
        // Sample device information for a tablet device
        return [
            'type' => 'Tablet',
            'os' => 'Unknown', // You can extract OS information here
            // Add more details as needed...
        ];
    }
}