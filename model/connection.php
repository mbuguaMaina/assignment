<?php
define("HOST", "localhost");
define("USER","root");
define("PASS","");
define("Db","assignment_tracker");

$conn = new mysqli(HOST,USER,PASS,Db);
if(!$conn) die($conn->connect_error);

?>