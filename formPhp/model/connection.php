<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "newdb");


$conn = new mysqli(HOST,USER,PASS,DB);
if($conn-> connect_errno) die("Data base error");

