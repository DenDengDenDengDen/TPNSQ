#!/usr/bin/env php
<?php
require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use OkStuff\PhpNsq\Cmd\Withdrwalapprovenotfice;

$application = new Application();

$config = require 'vendor/okstuff/phpnsq/src/config/phpnsq.php';

$application->add(new Withdrwalapprovenotfice($config, null));

$application->run();

//提币审核php withdrwal_approve_notfice.php phpnsq:sub2 WITHDRWAL_APPROVE_NOTFICE WITHDRWAL_APPROVE_CHANNEL

//提币审核php withdrwal_approve_notfice.php phpnsq:sub2 RC_WITHDRAW WITHDRAW_CHANNEL