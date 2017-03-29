<?php

namespace App\Custom;

use App\Custom\Device;

class DummyConnection {
    
    private $device;
    
    public function __construct(Device $device) {
        $this->device = $device;
    }
    
    public function test() {
        return [
            'status' => 'ok',
            'msg' => $this->device->executeCommand('ping')
        ];
    }
    
}

