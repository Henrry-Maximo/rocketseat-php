<?php
require 'data.php';

$uri = $_SERVER['REQUEST_URI'];
$uriWithoutBar = str_replace('/', '', $uri);

// var_dump($uriWithoutBar); string(6) "/book" string(5) "book"

$view = "index";
require "views/template/app.php";

?>