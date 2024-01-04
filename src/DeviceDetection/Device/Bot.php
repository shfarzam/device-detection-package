<?php

namespace shfarzam\DeviceDetection;

// Class for Bot
class Bot extends AbstractDevice
{
    public function isDevice(): bool
    {
        // Sample logic to detect bots using a more refined check
        $botKeywords = [
            'bot',
            'crawl',
            'spider',
            'slurp',
            'search',
            'bingbot',
            'googlebot',
            'yandexbot',
            'duckduckbot',
            'baiduspider',
            'msnbot',
            'teoma',
            'adidxbot',
            'ahrefsbot',
            'mj12bot',
            'semrushbot',
            'sogou',
            // Add more known bot keywords as needed...
        ];

        foreach ($botKeywords as $keyword) {
            if (stripos($this->userAgent, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }

    public function getDeviceInfo(): array
    {
        // Sample device information for a bot
        return [
            'type' => 'Bot',
            'description' => 'Crawler or Bot', // Additional bot-related details
            // Add more details as needed...
        ];
    }
}