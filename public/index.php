<?php

if (PHP_MAJOR_VERSION < 8) {
    echo 'Необходима версия php >= 8';
    exit;
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \core\App();


