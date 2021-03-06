<?php declare(strict_types=1);

require '../vendor/autoload.php';

header('Content-type: application/json; charset=UTF-8');

set_error_handler('ErrorHandler::handleError');
set_exception_handler('ErrorHandler::handleException');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
