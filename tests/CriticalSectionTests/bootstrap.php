<?php

declare(strict_types=1);

$autoloader = require_once __DIR__ . '/../../vendor/autoload.php';

define("TEST_DIR", __DIR__);
define("TEMP_DIR", TEST_DIR . '/../tmp/' . (isset($_SERVER['argv']) ? md5(serialize($_SERVER['argv'])) : getmypid()));

Tester\Environment::setup();

function run(Tester\TestCase $testCase)
{
    $testCase->runTest(isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : NULL);
}

return $autoloader;
