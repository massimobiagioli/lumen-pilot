<?php

namespace App\Custom;

use App\Custom\Device;

class MockDevice implements Device {
    
    public function executeCommand($cmd) {
        return "executed $cmd";
    }

}
