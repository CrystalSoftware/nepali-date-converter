<?php
namespace Crystal\NepaliDate;
class Module{
    const VERSION = '1.0.0.1';
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}