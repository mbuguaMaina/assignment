<?php
 function get_assignments_by_course($course_id){
   global $conn;
if($course_id){
  $query = "SELECT A.ID, A.Description, C.course_Name FROM assignments A NATURAL JOIN courses C   where A.CourseID = '$course_id' ORDER BY C.courseID";

}else{
    $query = "SELECT A.ID, A.Description, C.course_Name FROM assignments A NATURAL JOIN courses C   ORDER BY C.CourseID";
}
$result = $conn->query($query);
$results = $result->fetch_all(MYSQLI_ASSOC);
 
return $results;
  
 }
 function delete_assignment($assignment_id){
   global $conn;
   $query = "DELETE FROM assignments WHERE `assignments`.`ID` = $assignment_id";
   $conn->query($query);
 }
function add_assignment($course_id,$desc)
{
  global $conn;
  $query = " INSERT INTO assignments VALUES(null,'$desc','$course_id')";
  $conn->query($query);
}
?>