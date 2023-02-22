<?php
 function get_courses(){
   global $conn;
   $query = "SELECT DISTINCT * FROM courses ORDER BY CourseID";
  $results =  $conn->query($query);
  $courses = $results->fetch_all(MYSQLI_ASSOC);
  return $courses;

 }
function get_courses_name($course_id){
  global $conn;

  if(!$course_id){
    return "View All";
  } else {
  $query = "SELECT * FROM courses WHERE CourseID = $course_id";
  $result = $conn->query($query);
  $results = $result->fetch_all();
  return $results;
  
  }
}
function delete_courses($course_id)
{
  global $conn;
  $query = "DELETE FROM courses WHERE `courses`.`CourseID` = $course_id";
  $conn->query($query);
}
function add_courses($course_name)
{
  global $conn;
  $query = "INSERT INTO courses VALUES('null','$course_name')";
  $conn->query($query);
}
?>