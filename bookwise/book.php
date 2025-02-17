<?php
require 'data.php';

$id = $_REQUEST['id'];

$filtered = array_filter($booksDatabaseOnMemory, fn($l) => $l['id'] == $id);
$firstBook = array_pop($filtered);

// var_dump($firstBook);


$view = "book";
require "views/template/app.php";

?>