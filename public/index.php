<?php

if (PHP_MAJOR_VERSION < 8) {
    echo 'Необходима версия php >= 8';
    exit;
}

require_once dirname(__DIR__) . '/config/init.php';

new \core\App();

//throw new Exception('Я твоего парихмахера руки целовал');
//echo $test;