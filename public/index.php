<?php declare(strict_types=1);

use Lodeb\Framework\Http\Kernel;
use Lodeb\Framework\Http\Request;
use Lodeb\Framework\Http\Response;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// request received
$request = Request::CreateFromGlobals();

// perform logic
$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();