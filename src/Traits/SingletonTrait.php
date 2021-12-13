<?php

namespace App\Traits;

trait SingletonTrait
{
    private $instance;

    protected function __construct() {}

    public function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    protected function __clone() {}
    protected function __wakeup() {}
}