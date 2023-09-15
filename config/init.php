<?php

// 1-режим разработки, 0-режим релиза
define("DEBUG", 1);
// Ведет к корню приложения
define("ROOT", dirname(__DIR__));
// Хранит путь к папке public
define("WWW", ROOT . '/public');
// Путь к папке приложения
define("APP", ROOT . '/app');
// Путь к папке vendor
define("CORE", ROOT . '/vendor/core');
// Путь к папке helpers
define("HELPERS", ROOT . '/vendor/core/helpers');
// Путь к папке с файлами кэша
define("CACHE", ROOT . '/tmp/cache');
// Путь к папке с логами
define("LOGS", ROOT . '/tmp/logs');
// Путь к папке с конфигурацией
define("CONFIG", ROOT . '/tmp/config');
// Путь к папке с шаблоном сайта по умолчанию
define("LAYOUT", 'ishop');
// Адрес сайта
define("PATH", 'http://shopExample.local');
// Страница администратора
define("ADMIN", 'http://shopExample.local/admin');
// Путь к картинке - 'Изображение отсутствует'
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';