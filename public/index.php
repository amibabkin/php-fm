<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Somecode\Framework\http\Request;

$request = Request::createFromGlobals();

dd($request);
