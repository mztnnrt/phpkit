<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use Cake\Config\Cache;
use HelloWorld\SayHello;

echo SayHello::world();
echo Cache::world();