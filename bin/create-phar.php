<?php

define('PHAR_FILE', dirname(__DIR__).'/build/console.phar');
// This will modify an existing phar, so make sure you delete the phar before running this again
$p = new Phar(PHAR_FILE, 
	FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, 'console.phar');

$p->startBuffering();

$stub = "#!/usr/bin/php \n" . $p->createDefaultStub('console.php');
$p->setStub($stub);
$p->buildFromDirectory(dirname(__DIR__).'/PharTest');
$p->stopBuffering();

echo "Archive created.\n";
