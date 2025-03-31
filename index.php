<?php

define('ROOT', __DIR__);

include_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$path = trim(trim($_SERVER['PATH_INFO'] ?? '', '/'));

if($path == '' || $path == 'home')
	include_once __DIR__ . '/pages/index.php';
else if($path == 'process')
	include_once __DIR__ . '/pages/process.php';
else if($path == 'resultat')
	include_once __DIR__ . '/pages/resultat.php';