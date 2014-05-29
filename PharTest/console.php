<?php

set_time_limit(0);

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use PharTest\Command\GreetCommand;

$application = new Application('Discovery Console');
$application->add(new GreetCommand());
$application->run();