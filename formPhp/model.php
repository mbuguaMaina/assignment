<?php
 require_once("./model/connection.php");
$name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
$result = 0;

function addUser($name, $email){
  
  global $conn;
if(!empty($name) && !empty($email)){
  $query = "INSERT INTO users VALUES('null','$name','$email')";
  $conn->query($query);
   if($conn){
    $result = 1;
   }else{
    $result = 2;
   }
    
}else{
    $result = 3;
}
  echo $result;
 
}
addUser($name,$email);