<?php
require 'data.php';

$controller = 'index';

if ($uri = str_replace('/', '', $_SERVER['PATH_INFO'])) {
  $controller = $uri;
};

require "controllers/{$controller}.controller.php";
