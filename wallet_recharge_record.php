#!/usr/bin/env php
<?php
require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use OkStuff\PhpNsq\Cmd\Walletrechargerecord;

$application = new Application();

$config = require 'vendor/okstuff/phpnsq/src/config/phpnsq.php';

$application->add(new Walletrechargerecord($config, null));

$application->run();

//充币到账php wallet_recharge_record.php phpnsq:sub1 WALLET_RECHARGE_RECORD WITHDRWAL_RECHARGE_CHANNEL

//充币到账php wallet_recharge_record.php phpnsq:sub1 RC_RECHARGE RECHARGE_CHANNEL