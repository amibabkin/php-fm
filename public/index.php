<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Somecode\Framework\http\Request;
use Somecode\Framework\http\Response;
use Somecode\Framework\http\Kernel;

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();
