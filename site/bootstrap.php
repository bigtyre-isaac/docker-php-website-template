<?php
require_once __DIR__ . '/vendor/autoload.php';

$timezone = $_ENV('TZ');
if (!empty($timezone)) {
  date_default_timezone_set($timezone);
}

$handleError = function($errno, $errstr, $errfile, $errline) {
  $errors = [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR];
  $isError = in_array($errno, $errors);
  if ($isError == false)
   return;

  error_log($errno);
  http_response_code(500);
};

set_error_handler($handleError);