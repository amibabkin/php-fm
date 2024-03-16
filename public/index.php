<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Somecode\Framework\http\Request;
use Somecode\Framework\http\Response;

$request = Request::createFromGlobals();

$clientContent = '<h1>Hello</h1>';

$response = new Response($clientContent, 200, []);

$response->send();

dd($request);
