<?php
require 'data.php';

// default
$view = "index";

// $uri = $_SERVER['REQUEST_URI'];
// perform without bar
// $view = str_replace('/', '', $uri);

// var_dump($uriWithoutBar); string(6) "/book" string(5) "book"

if ($uri = str_replace('/', '', $_SERVER['REQUEST_URI'])) {
  $view = $uri;
};

// $view = "index";
require "views/template/app.php";


// files all type html will for the folder template

/* 
  M => Data
  V => View
  C => Controller
*/
?>


<!-- <!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
  </head>

</html> -->