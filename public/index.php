<?php

if (PHP_MAJOR_VERSION < 8) {
    echo 'Необходима версия php >= 8';
    exit;
}

require_once dirname(__DIR__) . '/config/init.php';

echo 'TEST';