<?php
require 'data.php';

$id = $_REQUEST['id'];

// filter elements by id unique
$filtered = array_filter($booksDatabaseOnMemory, fn ($l) => $l('id'));

// 
$book = array_pop($filtered);

$view = "livro";
require "views/template/app.php";