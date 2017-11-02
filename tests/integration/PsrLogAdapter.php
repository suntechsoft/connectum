<?php

namespace Platron\Connectum\tests\integration;

use Psr\Log\LoggerInterface;

class PsrLogAdapter implements LoggerInterface {
    
    public function alert($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function critical($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function debug($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function emergency($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function error($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function info($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function log($level, $message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function notice($message, array $context = array()) {
        $this->writeAll($message, $context);
    }

    public function warning($message, array $context = array()) {
        $this->writeAll($message, $context);
    }
    
    protected function writeAll($message, $context){
        if(!empty($context)){
            file_put_contents('/tests/logs/'.date("Y-m-d").'.txt', $message.print_r($context, true), FILE_APPEND);
        }
        else {
            file_put_contents('/tests/logs/'.date("Y-m-d").'.txt', $message, FILE_APPEND);
        }
    }

}
