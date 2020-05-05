<?php
session_start();
define("DB_HOST", "localhost"); // Set database host

define("DB_USER", "root"); // Set database user

define("DB_PASS", "kingsefi"); // Set database password

define("DB_NAME", "tsn"); // Set database name

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");

$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");
