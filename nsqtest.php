#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use OkStuff\PhpNsq\Cmd\Subscribe;

$application = new Application();

$config = require 'vendor/okstuff/phpnsq/src/config/phpnsq.php';

$application->add(new Subscribe($config, null));

$application->run();

//php nsqtest.php phpnsq:sub RC_RECHARGE RECHARGE_CHANNEL