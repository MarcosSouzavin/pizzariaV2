<?php

require_once __DIR__.'/env.php';

loadEnv(__DIR__.'/../../.env');

date_default_timezone_set('America/Sao_Paulo');

define('APP_NAME', $_ENV['APP_NAME']);
define('APP_URL', $_ENV['APP_URL']);
define('APP_DEBUG', $_ENV['APP_DEBUG']);